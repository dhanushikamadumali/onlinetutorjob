<?php

namespace Modules\Auth\App\Repositaries;

use Spatie\QueryBuilder\QueryBuilder;
use Modules\Auth\App\Models\User;
use Modules\Auth\App\Repositaries\AuthInterface;
use Laravel\Passport\Passport;
use Auth;
use Illuminate\Validation\ValidationException;

class AuthImplements implements AuthInterface
{

    // all proposals
    public function index()
    {
        // $users = QueryBuilder::for(User::class)
        //     ->allowedFilters('name', 'email')
        //     ->get();

        // return $users;
    }

    // create a user
    public function create($data)
    {

        $data['password'] = bcrypt($data['password']);


        if ($data["usertype"] === "Student") {
            $response = User::create($data);
            $response->assignRole("Student");
            // $accessToken =  $response->createToken('authToken')->accessToken;
            return ([
                'data' => $response,
                'token' => $response->createToken('api-system-user')->accessToken,
            ]);
        } else if ($data["usertype"] === "Teacher") {

            $response = User::create($data);
            $response->assignRole("Teacher");

            return ([
                'data' => $response,
                'token' => $response->createToken('api-system-user')->accessToken,
            ]);
        }
    }

    // update a user
    public function update($data, $id)
    {
        $response = $id->update($data);
        return $response;
    }

    // delete a user
    public function delete($id)
    {
        $id->delete();
    }

    public function login($data)
    {

        if (!Auth::attempt($data)) {
            throw ValidationException::withMessages(['Email Or Password Is Incorrect']);
        }

        return ([
            'data' => auth()->user(),
            'access_token' => auth()->user()->createToken('authToken')->accessToken
        ]);
    }

    public function viewteacher(){

        $response = User::where('usertype',"Teacher")->get();

        if(count($response) >0){
            return response()->json(['data' => $response]);
        }
        else{
            // dd($data);
            throw ValidationException::withMessages([
                'error' => "No Data Found With Entered Value",
            ]);
            return response()->json('no');
        }

    }

    public function singleteacher($id){


        $response= User::where('id', $id)->first();

        if($response){
            return response()->json(['data' => $response]);
        }
        else{
            throw ValidationException::withMessages([
                'error' => "No Data Found With Entered Value",
            ]);
            return response()->json('no');
        }

    }
 


}

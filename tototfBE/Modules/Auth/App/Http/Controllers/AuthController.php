<?php

namespace Modules\Auth\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use Modules\Auth\App\Models\User;
use Illuminate\Support\Facades\Hash;
use Modules\Auth\App\Http\Requests\AddAuthRequest;
use Modules\Auth\App\Repositaries\AuthInterface;
use Modules\Auth\App\Http\Requests\SigninRequest;
use Exception;
use Illuminate\Support\Facades\Notification;

use App\Events\RegisterEvent;

class AuthController extends Controller {
    /**
    * Display a listing of the resource.
    */

    protected $repositaryinterface;

    public function __construct( AuthInterface $repositaryinterface ) {
        $this->repositaryinterface  = $repositaryinterface;
    }

    public function index() {
        // try {
        //     $responseData  =  $this->repositaryinterface->index();
        //     return response()->json( [ 'data' => $responseData ], 200 );
        // } catch ( Exception $e ) {
        //     return response()->json( [ 'error' => $e->getMessage() ], 500 );
        // }
    }
    /**
    * Store a newly created resource in storage.
    */

    public function register( AddAuthRequest $request ) {

        try {

            $created_data = $this->repositaryinterface->create($request->validated());

            $user = $created_data['data'];
            event(new RegisterEvent($user));
            // Notification::route('mail','dhanushika76@gmail.com')->notify(new sendmail($data));
            // mail send
            // Notification::route( 'mail', 'dhanushika76@gmail.com' )->notify( new sendmail() );
            return response()->json( [ 'data' => $created_data ] );
        } catch ( Exception $e ) {
            return response()->json( [ 'error' => $e->getMessage() ], 500 );
        }
    }

    public function login( SigninRequest  $request ) {
        try {
            $login_data = $this->repositaryinterface->login( $request->validated() );

            return response()->json( [ 'data' => $login_data ] );
        } catch ( Exception $e ) {
            return response()->json( [ 'error' => $e->getMessage() ], 400 );
        }
    }

    public function logout() {
        try {
            $usertoken = auth( 'api' )
            ->user()
            ->token();
            $usertoken->revoke();
            return response( [
                'data' => 'logged out',
            ] );
        } catch ( Exception $e ) {
            return response()->json( [ 'error' => $e->getMessage() ], 500 );
        }
    }
    /**
    * Update the specified resource in storage.
    */

    public function update( AddAuthRequest  $request, User $id ) {

        try {
            $data =  $request->validate(
                [
                    'name' => 'required',
                    'email' => 'required'

                ]
            );
            $responseData  =  $this->repositaryinterface->update( $id, $data );
            return response()->json( [ 'data' => $responseData ], 200 );
        } catch ( Exception $e ) {
            return response()->json( [ 'error' => $e->getMessage() ], 500 );
        }
    }

    /**
    * Remove the specified resource from storage.
    */

    public function destroy( User $id ) {
        try {
            $this->repositaryinterface->delete( $id );
            return response()->json( [ 'data' => 'Successfully deleted' ], 200 );
        } catch ( Exception $e ) {
            return response()->json( [ 'error' => $e->getMessage() ], 500 );
        }
    }

    public function viewteacher()
    {
        try {

            $response = $this->repositaryinterface->viewteacher();

            // dd($response->original);

            return response()->json($response->original, 200);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function singleteacher($id)
    {
        try {
            $response = $this->repositaryinterface->singleteacher($id);
            return response()->json($response->original["data"], 200);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }


}

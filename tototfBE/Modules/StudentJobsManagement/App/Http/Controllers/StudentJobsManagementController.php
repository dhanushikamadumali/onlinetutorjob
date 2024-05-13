<?php

namespace Modules\StudentJobsManagement\App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Exception;
use App\Jobs\SendStudentJobCreationEmail;
use Illuminate\Support\Facades\Notification;
use App\Notifications\sendmail;
use Modules\StudentJobsManagement\App\Models\studentJobs;
use Modules\StudentJobsManagement\App\Repositaries\StudentJobInterface;
use Modules\StudentJobsManagement\App\Http\Requests\AddStudentJobsRequest;
use Modules\Auth\App\Models\User;
use App\Jobs\SendStudentJobsCreationEmail;

class StudentJobsManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    protected $repositaryinterface;

    public function __construct(StudentJobInterface $repositaryinterface)
    {

        $this->repositaryinterface  = $repositaryinterface;
    }

    public function index()
    {
        try {
            $responseData  =  $this->repositaryinterface->index();
            return response()->json(['data' => $responseData], 200);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    /**
     * Show the form for creating a new resource.
     */

    public function store(AddStudentJobsRequest $request)
    {
        try {
            $responseData  =  $this->repositaryinterface->create($request->validated());

            $user = User::where('id', $responseData['studentid'])->first();

          


            SendStudentJobCreationEmail::dispatch($user);

            return response()->json(['data' => $responseData], 200);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(AddStudentJobsRequest $request, studentJobs $id)
    {
        try {
            $responseData  =  $this->repositaryinterface->update($request->validated(), $id);
            return response()->json(['data' => $responseData], 200);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy(studentJobs $id)
    {

        try {
            $this->repositaryinterface->delete($id);
            return response()->json(['data' => 'Successfully deleted'], 200);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}

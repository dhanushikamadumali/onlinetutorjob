<?php

namespace Modules\BidProposalsManagement\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Exception;
use Spatie\QueryBuilder\QueryBuilder;
use Illuminate\Support\Facades\Notification;
use App\Notifications\sendmail;
use Modules\BidProposalsManagement\App\Models\BidProposal;
use Modules\StudentJobsManagement\App\Models\studentJobs;
use Modules\Auth\App\Models\User;
use Illuminate\Support\Facades\DB;

use Modules\BidProposalsManagement\App\Repositaries\BidProposalInterface;
use Modules\BidProposalsManagement\App\Http\Requests\AddProposalRequest;

class BidProposalsManagementController extends Controller {
    /**
    * Display a listing of the resource.
    */

    protected $repositaryinterface;

    public function __construct( BidProposalInterface $repositaryinterface ) {
        $this->repositaryinterface  = $repositaryinterface;
    }

    public function index() {
        try {
            $responseData  =  $this->repositaryinterface->index();
            return response()->json( [ 'data' => $responseData ], 200 );
        } catch ( Exception $e ) {
            return response()->json( [ 'error' => $e->getMessage() ], 500 );
        }
    }

    /**
    * Store a newly created resource in storage.
    */

    //  AddProposalRequest $request

    public function store( AddProposalRequest $request, $id ) {

        try {
            $responseData  =  $this->repositaryinterface->create( $request->validated() );
            $proposalid =  $responseData[ 'id' ];
            $tutorjobid = $id;

            dd( $tutorjobid );

            $proposalDetails = DB::table( 'proposals' )->select( 'bitamount' )->where( 'id', $proposalid )->first();

            $amount = $proposalDetails->bitamount;
            dd( $amount );

            // $jobDetails = studentJobs::where( 'id', $tutorjobid );
            // $studentid = $jobDetails[ 'studentid' ];

            // $userDetails = User::where( 'id', $studentid );
            // $useremail = $userDetails[ 'email' ];

            // $data = [
            //     'greeting' => 'Hello ',
            //     'subject' => 'Proposal Creation Notification',
            //     'line1' => 'Some lecture has submit a proposal'
            // ];
            // Notification::route( 'mail', $useremail )->notify( new sendmail( $data ) );

            return response()->json( [ 'data' => $responseData ], 200 );
        } catch ( Exception $e ) {
            return response()->json( [ 'error' => $e->getMessage() ], 500 );
        }
    }

    /**
    * Update the specified resource in storage.
    */

    public function update( AddProposalRequest $request, BidProposal $id ) {
        try {
            $responseData  =  $this->repositaryinterface->update( $request->validated(), $id );
            return response()->json( [ 'data' => $responseData ], 200 );
        } catch ( Exception $e ) {
            return response()->json( [ 'error' => $e->getMessage() ], 500 );
        }
    }

    /**
    * Remove the specified resource from storage.
    */

    public function destroy( BidProposal $id ) {
        try {
            $this->repositaryinterface->delete( $id );
            return response()->json( [ 'data' => 'Successfully deleted' ], 200 );
        } catch ( Exception $e ) {
            return response()->json( [ 'error' => $e->getMessage() ], 500 );
        }
    }
}
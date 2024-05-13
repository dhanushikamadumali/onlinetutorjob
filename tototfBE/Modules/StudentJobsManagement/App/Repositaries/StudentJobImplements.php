<?php

namespace Modules\StudentJobsManagement\App\Repositaries;

use Spatie\QueryBuilder\QueryBuilder;
use Modules\StudentJobsManagement\App\Models\studentJobs;

use Modules\StudentJobsManagement\App\Repositaries\StudentJobInterface;

class StudentJobImplements implements StudentJobInterface {

    public function index() {
        $studentjobs = QueryBuilder::for ( studentJobs::class )
        ->allowedFilters( 'heading', 'description', 'subjects', 'meetingtype' )
        ->get();

        return $studentjobs;

    }

    public function create( $data ) {

        // $user = auth('api')->user();
        // $data['studentid']=$user->id;
        $data['studentid'] = 4;
        $response = studentJobs::create( $data );
        return $response;
    }

    public function update( $data, $id ) {

        $response = $id->update( $data );
        return $response;

    }

    public function delete( $id ) {
        $id->delete();

    }

}

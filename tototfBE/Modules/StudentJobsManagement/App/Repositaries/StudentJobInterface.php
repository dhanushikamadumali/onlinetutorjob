<?php

namespace Modules\StudentJobsManagement\App\Repositaries;

interface StudentJobInterface {
    public function index();

    public function create( $data );

    public function update( $data, $id );

    public function delete( $id );
}
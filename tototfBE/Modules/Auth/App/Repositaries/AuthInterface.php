<?php

namespace Modules\Auth\App\Repositaries;


interface AuthInterface
{
    public function index();
    public function create($data);
    public function update($data, $id);
    public function delete($id);
    public function login($data);
    public function viewteacher();
    public function singleteacher($id);
}

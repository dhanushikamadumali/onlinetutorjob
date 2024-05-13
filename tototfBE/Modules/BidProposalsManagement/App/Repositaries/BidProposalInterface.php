<?php

namespace Modules\BidProposalsManagement\App\Repositaries;


interface BidProposalInterface
{
    public function index();
    public function create($data);
    public function update($data, $id);
    public function delete($id);
}

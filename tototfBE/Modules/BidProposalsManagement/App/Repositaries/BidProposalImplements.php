<?php

namespace Modules\BidProposalsManagement\App\Repositaries;

use Spatie\QueryBuilder\QueryBuilder;
use Modules\BidProposalsManagement\App\Models\BidProposal;
use Modules\BidProposalsManagement\App\Repositaries\BidProposalInterface;

class BidProposalImplements implements BidProposalInterface
{
    // all proposals
    public function index()
    {
        $proposals = QueryBuilder::for(BidProposal::class)
            ->allowedFilters('bitamount', 'tutorjobid')
            ->get();

        return $proposals;
    }

    // create a proposal
    public function create($data)
    {
        $response = BidProposal::create($data);

        return $response;
    }

    // update a proposal
    public function update($data, $id)
    {
        $response = $id->update($data);
        return $response;
    }

    // delete a proposal
    public function delete($id)
    {
        $id->delete();
    }
}
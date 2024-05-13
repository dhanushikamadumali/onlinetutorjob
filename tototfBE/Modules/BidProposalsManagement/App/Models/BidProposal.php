<?php

namespace Modules\BidProposalsManagement\App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BidProposal extends Model
{
    use HasFactory;

    protected $table = 'proposals';

    protected $primary_key = 'id';

    protected $fillable = [
        'bitamount',
        'bitdescription',
        'teacherid',
        'tutorjobid',
    ];

    public function teacher()
    {
        // return $this->belongsTo('Modules\BidProposalsManagement\Entities\Category', 'id');
    }

    public function job()
    {
        // return $this->belongsTo('Modules\BidProposalsManagement\Entities\Category', 'id');
    }
}

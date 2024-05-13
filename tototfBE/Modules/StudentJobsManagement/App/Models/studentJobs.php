<?php
//hi

namespace Modules\StudentJobsManagement\App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studentJobs extends Model
{
    use HasFactory;

    protected $primary_key = 'id';
    protected $table = 'tutorjob';

    protected $casts = [
        'subjects' => 'array'
    ];

    protected $fillable = ['heading', 'description', 'subjects', 'meetingtype', 'paymentrate', 'paymenttype', 'studentid'];
}

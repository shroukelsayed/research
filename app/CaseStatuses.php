<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CaseStatuses extends Model
{
    //
    protected $table = 'case_statuses';

    protected $fillable = [
        'case_id',
        'status',
        'date',
    ];

}

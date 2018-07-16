<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Support extends Model
{
    protected $table = 'case_support';

    protected $fillable = [
        'case_id',
        'source_category',
        'source_name',
        'type',
        'period',
    ];

    public function toArray()
    {
        return [
            'source_category' => $this->source_category,
            'source_name' => $this->source_name,
            'type' => $this->type,
            'period' => $this->period,
        ];
    }
}

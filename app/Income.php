<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    protected $table = 'case_income';

    protected $fillable = [
        'case_id',
        'source_type',
        'notes',
        'monthly_amount',
        'source_flow',
    ];

    public function toArray()
    {
        return [
            'source_type' => $this->source_type,
            'notes' => $this->notes,
            'monthly_amount' => $this->monthly_amount,
            'source_flow' => $this->source_flow,
        ];
    }
}

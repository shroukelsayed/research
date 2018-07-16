<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Debts extends Model
{
    protected $table = 'case_debts';

    protected $fillable = [
        'case_id',
        'amount',
        'stay',
        'reason',
        'refund_method',
        'monthly_amount',
    ];

    public function toArray()
    {
        return [
            'amount' => $this->amount,
            'stay' => $this->stay,
            'reason' => $this->reason,
            'refund_method' => $this->refund_method,
            'monthly_amount' => $this->monthly_amount,
        ];
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    protected $table = 'case_rooms';

    protected $fillable = [
        'case_id',
        'type',
        'roof_type',
        'roof_status',
        'paint',
        'notes',
    ];

    public function toArray()
    {
        return [
            'type' => $this->type,
            'roof_type' => $this->roof_type,
            'roof_status' => $this->roof_status,
            'paint' => $this->paint,
            'notes' => $this->notes,
        ];
    }
}

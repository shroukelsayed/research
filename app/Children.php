<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Children extends Model
{
    protected $table = 'case_children';

	protected $fillable = [
        'case_id',
        'name',
        'gender',
        'age',
        'relationship_status',
        'education_status',
        'work_status',
        'profession',
        'is_ill',
        'illness_type',
        'illness_description',
        'illness_prevent_movement',
        'need_monthly_treatment',
        'has_national_support',
        'treatment_monthly_amount',
        'treatment_affordable',
        'need_operation',
	];

	public function toArray()
    {
        return [
            'name' => $this->name,
            'gender' => $this->gender,
            'age' => $this->age,
            'relationship_status' => $this->relationship_status,
            'education_status' => $this->education_status,
            'work_status' => $this->work_status,
            'profession' => $this->profession,
            'is_ill' => $this->is_ill,
            'illness_type' => $this->illness_type,
            'illness_description' => $this->illness_description,
            'illness_prevent_movement' => $this->illness_prevent_movement,
            'need_monthly_treatment' => $this->need_monthly_treatment,
            'has_national_support' => $this->has_national_support,
            'treatment_monthly_amount' => $this->treatment_monthly_amount,
            'treatment_affordable' => $this->treatment_affordable,
            'need_operation' => $this->need_operation,
        ];
    }
}

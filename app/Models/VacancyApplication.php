<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VacancyApplication extends Model
{
    use HasFactory;

    protected $fillable = [
        'vacancy_id',
        'full_name',
        'first_name',
        'last_name',
        'email',
        'phone_number',
        'resume',
        'cover_letter',
        'application_status',
        'description',
        'status',
    ];

    public function vacancy()
    {
        return $this->belongsTo(Vacancy::class);
    }
}

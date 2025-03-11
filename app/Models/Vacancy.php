<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'sub_title',
        'requirements',
        'location',
        'employment_type',
        'salary_range',
        'experience_level',
        'vacancies_count',
        'posted_date',
        'deadline',
        'benefits',
        'contact_email',
        'contact_phone',
        'application_link',
        'image',
        'description',
        'short_description',
        'status',
        'position',
    ];
}

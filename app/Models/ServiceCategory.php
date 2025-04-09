<?php

namespace App\Models;

use App\Services\Service;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model
{
    use HasFactory;

    protected $table = 'service_categories';

    protected $fillable = [
        'title',
        'sub_title',
        'slug',
        'description',
        'secondary_description',
        'icon',
        'icon_fa',
        'thumbnail_image',
        'position',
        'status'
    ];

    public function services()
    {
        return $this->hasMany(Services::class);
    }

}

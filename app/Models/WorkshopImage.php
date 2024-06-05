<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkshopImage extends Model
{
    use HasFactory;

    protected $table = 'workshop_images';
    protected $primaryKey = 'id';

    protected $fillable = [
        'workshop_id',
        'image_address',
        'image_alt',
    ];
}

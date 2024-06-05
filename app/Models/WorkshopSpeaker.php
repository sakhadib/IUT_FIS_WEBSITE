<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkshopSpeaker extends Model
{
    use HasFactory;

    protected $table = 'workshop_speakers';
    protected $primaryKey = 'id';

    protected $fillable = [
        'workshop_id',
        'name',
        'profile_link',
        'member_id',
    ];
}

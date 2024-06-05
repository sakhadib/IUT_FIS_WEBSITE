<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Winner extends Model
{
    use HasFactory;

    protected $table = 'winners';
    protected $primaryKey = 'id';

    protected $fillable = [
        'achievement_id',
        'member_id',
    ];
}

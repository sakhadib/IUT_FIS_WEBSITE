<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Executive extends Model
{
    use HasFactory;

    protected $table = 'executives';
    protected $primaryKey = 'id';

    protected $fillable = [
        'member_id',
        'position',
        'panel_range',
    ];
}

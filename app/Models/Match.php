<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatchFoot extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'home',
        'out',
        'goal_home',
        'goal_out',
        'score',
        'journee',
        'date',
        'league_id',
        'api_id',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeagueRanking extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'league_id',
        'team_id',
        'point',
        'journee',
        'serie',
        'victory',
        'defeat',
        'draw',
        'goal_for',
        'goal_against',
        'goal_average',
        'ranking_before',
        'ranking_after',
    ];
}

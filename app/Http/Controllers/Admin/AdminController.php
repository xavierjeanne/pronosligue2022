<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    /**
     * Show the league dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function league()
    {
        return view('back.league');
    }
    
    /**
     * Show the user dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function user()
    {
        return view('back.user');
    }

    /**
     * Show the league stat dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function leagueStat()
    {
        return view('back.leagueStat');
    }
    
    /**
     * Show the user stat dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function userStat()
    {
        return view('back.userStat');
    }

    /**
     * Show the contact dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function contact()
    {
        return view('back.contact');
    }
    
    

    

   
}

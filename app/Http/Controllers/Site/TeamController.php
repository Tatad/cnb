<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index(){
        $team = Team::get();
        return view('site.pages.team', compact('team'));
    }
}

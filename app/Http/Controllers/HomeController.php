<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function __construct()
    {

    }

    public function myTestAddToLog()
    {
        \LogActivity::addToLog('My Testing Add To Log.');
        dd('log insert successfully.');
    }

    public function logActivity()
    {
        $logs = \LogActivity::logActivityLists();
        return view('logActivity',compact('logs'));
    }
}

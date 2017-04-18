<?php

namespace App\Http\Controllers\WEB;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Party;

class HomeController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view('home.home');
    }

    public function initial() {
        return view('home.initial');
    }

    public function party() {
        return view('home.party');
    }

    public function settings() {
        return view('home.settings');
    }

    public function profile() {
        return view('home.profile');
    }

    public function notifications() {
        return view('home.notifications');
    }

    public function now() {
        return view('home.now');
    }

    public function events() {
        return view('home.events');
    }

    public function listParty() {
        return view('home.list-party')->with('parties', Party::all());
    }

    public function createParty() {
        return view("home.modals.create-party");
    }

    public function isOffline() {
        return view("home.modals.is-offline");
    }
}

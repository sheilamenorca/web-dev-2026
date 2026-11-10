<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function index() {
        return view('user.create');
    }

    public function userindex() {
        return view('user.create');
    }

    public function welcome() {
        return view('welcome');
    }

    public function home() {
        return view('home');
    }

    public function user($id) {
        return "<a href = '".route('userEdit', $id)."'> User Page </a>";
    }

    public function dashboard() {
        return view('user.dashboard');
    }

    public function assignment() {
        return view('user.assignment');
    }

    public function fallback() {
        return redirect()->route('home');
    }
}



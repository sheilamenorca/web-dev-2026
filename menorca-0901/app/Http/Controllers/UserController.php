<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function addUser() {
        DB::table('user')->insert([
            'last_name' => 'Menorca'
        ]);
    }

    public function getAllUsers() {
        $result = DB::table('user')->get();
        return $result;
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class RegisterController extends MyController
{
    //
    function index(){
        $data['name'] = "this is  my controller : ";
        return parent::output('form/register', $data);
    }
    function create(Request $request){

        $validate = $request->validate([
            'email' => 'required'
        ]);

        $data['firstname'] = $request->input("firstname", '');
        $data['lastname'] = $request->input("lastname", '');
        $data['username'] = $request->input("username", '');
        $data['email'] = $request->input("email", '');
        $data['password'] = $request->input("password", '');

        DB::insert('INSERT INTO users (name, email, password) values(?, ?, ?)',
            [$data['firstname']." ".$data['lastname'], $data['email'], $data['password']]
        );
        $users = DB::select('SELECT * FROM users;');
        $data['users'] = $users;
        return parent::output('form/register', $data);
    }
}

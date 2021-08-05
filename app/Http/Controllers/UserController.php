<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //

    public function index()
    {
        # code...

        ## Using DB facade to create queries


        # Using Eloquent
        # Eloquent verifies that conditions are satified before performing queries. 
        # Conditions such as hidden, fillable, 

        $user = new User();
        #var_dump($user);
        #dd($user);

        /*
        $user->name = 'DNA';
        $user->email = 'dna@email.me';
        $user->password = bcrypt('password');

        $user->save(); */

        # Mass Assignment and Create
        $aUser = [
            'name' => 'Elong',
            'email' => 'alex@elong.lu',
            'password' => bcrypt('password'),
        ];
        User::create($aUser);

        # Delete
        User::where('id', 8)->delete();

        # Update
        User::where('id', 7)->update(['name' => 'BriceIsFine']);

        # Select All
        $users = User::all();

        return $users;




        /*
        # Insert Query
         DB::insert('insert into users(name,email,password) values (?,?,?)',
         ['D. Bryzz', 'dbryzz@email.me', 'password']);
         

        
        DB::insert('insert into users(name,email,password) values (?,?,?)',
         ['DNA Bryzz', 'dna@email.me', 'password']);
        


        # Select Query
        $users = DB::select('select * from users');

        # Update Query
        DB::update('update users set name = ? where id = 1', ['D.Bryzz']);

        # Delete Query
        DB::delete('delete from users where id = 2');
        

        return $users;
        

        return view('welcome');
        */
    }
}

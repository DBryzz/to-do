<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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
            'name' => 'bilong',
            'email' => 'alex@bilong.lu',
            'password' => 'password',

        ];
        #User::create($aUser);

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

    ## Initial Upload Function
    /*
      public function upload(Request $request)
        {
            # code...
            # dd($request->all()); //die-dumb whatever the request has
            # dd($request->file('image'));
            # dd($request->has('image'));
            # dd($request->hasFile('image'));
            # dd($request->image);

            // $request->image->store('images', 'public');
            if ($request->hasFile('image')) {
                # code...
                # dd($request->image->getClientOriginalName());
                # dd(asset('images/' . Auth::user()->avatar));

            $filename = $request->image->getClientOriginalName();
            $this->deleteOldImage();
                $request->image->storeAs('images', $filename, 'public');
                auth()->user()->update(['avatar' => $filename]); 
            }

            return redirect()->back();
        }
    
        protected function deleteOldImage()
        {
            # code...
            if (auth()->user()->avatar) {
                # code...
                Storage::delete('/public/images/'.auth()->user()->avatar);
            }
        } 
    */



    ## Refactored upload function
    public function upload(Request $request)
    {
        if ($request->hasFile('image')) {
            User::uploadAvatar($request->image);
            # session()->put('message', 'Image uploaded.');
            # $request->session()->flash('message', 'Image uploaded (:');
            return redirect()->back()->with('message', 'Image uploaded (:');   //success message
        }
        #$request->session()->flash('error', 'Error uploading image');
        return redirect()->back()->with('error', 'Error uploading image');  //error message
    }
}

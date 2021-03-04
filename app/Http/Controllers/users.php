<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class users extends Controller
{
    public function getAllUsers() {
    //logic to get all users
    }
    use App\Users;
    public function createUsers(Request $request){
           $users = new Users;
           $users->name = $request->name;
           $users->email = $request->email;
           $users->password = $request->password;
           $users->is_admin = $request->is_admin;
           $users->save();

           return response()->json([
               "message" => "new user created"
           ], 201);

        }

    public function getUsers($id){
            //logic to get a users record 
        }

    public function updateUsers(Request $request, $id){
            //logic to update a users record 
        }

    
    public function deleteUsers($id){
            //logic to delete a users record 
        }
}

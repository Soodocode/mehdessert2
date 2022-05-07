<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
     
    function show()
    { 
        $data = User::where(['roles' => 1])->get();
         return view("/dashboard/customerlist", ['members'=> $data]); 
        //return "hello";      
    }

    function edits(Request $req)
    {
       //return $req->input();
    //    $data=User::find($req->id);
    //    $data->name=$req->name;
    //    $data->email=$req->email;
    //    $data->password=$req->password;
    //    $data->save();
    //    return redirect('update');

         //return $req->input(); 
         $data = DB::table('users')
         ->where('id', $req->id)
         ->update([
          'name' => $req['name'],
          'email' => $req['email'],
          'password' => Hash::make($req['password']),
          ]); 
         return redirect('update');
    }

    function memberupdate($id)
    { 
        $data=User::find($id);
        return view("memberupdate", ['data'=> $data]); 
    }

    function delete($id)
    { 
        $data=User::find($id);
        $data->delete();
        return redirect('list'); 
        //return User::find($id);
    }

    public function updateproduct(Request $request)
    {   
             $request->validate([
                'name' => 'required',
            ]);
    
            // ensure the request has a file before we attempt anything else.
            if ($request->hasFile('file')) {
    
                $request->validate([
                    'image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
                ]);
    
                // Save the file locally in the storage/public/ folder under a new folder named /product
                $request->file->store('product', 'public');
    
                // Store the record, using the new file hashname which will be it's new filename identity.
             
             $product = DB::table('products')
             ->where('id', $request->id)
             ->update([
              'name' => $request['name'],
              'price' => $request['price'],
              'description' => $request['description'],
              "file_path" => $request->file->hashName(),
              ]);  
             return redirect('products'); 
            }
    }


}

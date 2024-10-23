<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function showAllusers()
    {
        $users = User::all();
        return view('admin.user-all', compact('users')); // Ensure this view exists at resources/views/user-all.blade.php
    }
    
    // update user status
    public function updateStatus(Request $request)
    {
        $updated = DB::table('users')
        ->where('id', $request->id)
        ->update(['status' => $request->status]);
    // Check if the update was successful
    if ($updated) {
        return response()->json(['success' => true,'message'=>'Updated successfully!']);
    }
        
    }
    

    public function edit_user($id){

        $user = User::findOrFail($id); // Use findOrFail to get a 404 if not found
        //dd($user);
        return view('admin.user-edit', compact('user'));
    }

    public function update_user(Request $request){
           //dd($request->user_img);
           
           $user = User::findOrFail($request->id);
        $userupdated = User::where('id', $request->id)->update([
            'user_name' => $request->username,
            'user_email' => $request->user_email ?? $user->user_email,
            'pws' => $request->password ?? $user->pws,
            'status' => $request->user_status ?? $user->status,
            'user_image' => $request->user_img,
        ]); 
       // $dataToUpdate = User::where('id', $request->id)->update($userupdated);
if($userupdated){
    return redirect()->route('user-edit', $user->id)->with(['success' => true, 'message' => 'User updated successfully']);
}
return response()->json(['success' => false, 'message' => 'User update failed']);
    }

 
    public function delete_user($id){

        $user = User::find($id);

        if($user){
            $user->delete();
            return redirect()->route('user-all', $user->id)->with(['success'=> true, 'message' => 'User  Deleted Successfully']);
        }
        
    }


}


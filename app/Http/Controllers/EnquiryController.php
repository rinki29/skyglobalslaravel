<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash; // Make sure to include Hash facade
use Illuminate\Support\Facades\DB; // Include DB facade
class EnquiryController extends Controller
{
    public function listEnquiry(){

        $data['user'] = DB::connection('mysql2')->table('booking')->get();

        return view('admin.listEnquiry',$data);

    }
    public function viewEnquiry($id){

        $data['user'] = DB::connection('mysql2')->table('booking')->where('id',$id)->first();

        return view('admin.viewEnquiry',$data);

    }
    public function editEnquiry($id){

        $data['user'] = DB::connection('mysql2')->table('booking')->where('id',$id)->first();

        return view('admin.editEnquiry',$data);

    }
    public function updateEnquiry($id, Request $request){

        $updateData = $request->all();

        unset($updateData['_token']);
        $updateData['booking_date'] = date('Y-m-d', strtotime($updateData['booking_date']));
        $updateData['fromdate'] = date('Y-m-d', strtotime($updateData['fromdate']));
        $updateData['todate'] = date('Y-m-d', strtotime($updateData['todate']));


        DB::connection('mysql2')->table('booking')
        ->where('id', $id)
        ->update($updateData);

        return redirect()->route('enquiry.edit',$id)->with('success','Updated Successfully');


    }
    public function deleteEnquiry($id){

        DB::connection('mysql2')->table('booking')
        ->where('id', $id)
        ->delete();

        return redirect()->route('enquiry.list')->with('success','Deleted successfully');

    }
    
}



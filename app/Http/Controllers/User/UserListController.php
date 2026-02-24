<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class UserListController extends Controller
{
    public function userlist(){
        $data=User::paginate(4);
        return view('admin.user.userdetails.activeuserlist', compact('data'));
    }
    public function edituser($id){
        $userlist=User::findOrFail($id);
        // dd($userlist);
       return view('admin.user.userdetails.edituser', compact('userlist'));
    }

    public function updateuser(Request $request, $id){
        $updateuser = User::findOrFail($id);
        $updateuser->name = $request->name;
        $updateuser->email = $request->email;
        $updateuser->phone = $request->phone;
        $updateuser->gender = $request->gender;


         if($request->hasFile('file')){
      if($updateuser->profile && Storage::disk('public')->exists('profile/'.$updateuser->profile)){
      Storage::disk('public')->delete('profile/'.$updateuser->profile);
      }
        $imagename = time(). "." .$request->file->extension();
        $request->file('file')->storeAs('profile', $imagename, 'public');
        $updateuser->profile = $imagename;
         }

        $updateuser->block_status = $request->block_status;
        $updateuser->save();
        return redirect()->route('activeuserlist')->with('success', 'User Updated Successfully');
    }
   
    public function activeuserlist(){
      $data = User::where('block_status','1')->paginate(4); 
      return view('admin.user.userdetails.activeuserlist',compact('data'));
    }

    public function inactiveuserlist(){
        $data = User::where('block_status','0')->paginate(4); 
        return view('admin.user.userdetails.inactiveuserlist',compact('data'));
    }

    public function blockUser(Request $request ,$id){
        $user = User::findOrfail($id);
        $user->block_status ='0';
        $user->save();
        return redirect()->route('inactiveuserlist')->with('success','User Blocked successfully');
    }

    public function unBlockUser(Request $request ,$id){
        $user = User::findOrfail($id);
        $user->block_status ='1';
        $user->save();
        return redirect()->route('activeuserlist')->with('success','User Unblocked successfully');
    }

}





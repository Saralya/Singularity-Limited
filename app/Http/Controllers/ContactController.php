<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ContactController extends Controller
{
    public function contact()
    {
        $contact=DB::table('contacts')->get();
        return view ('contactpage',compact('contact'));
    }
    
     public function addcontact()
    {
        return view ('contactform');
    }
    
    public function storecontact(Request $req)
    {
        // $validateData=$req->validate([
            
            //'land'=>'required|unique:contacts|max:7|min:7',
             //'mobile'=>'required|unique:contacts|max:11|min:11',
             //'office'=>'required|unique:contacts|max:11|min:7'
        //]);
        $data=array();
        $data['fname']=$req->fname;
        $data['lname']=$req->lname;
        $data['email']=$req->email;
        $data['address1']=$req->address1;
        $data['address2']=$req->address2;
        $data['address3']=$req->address3;
        $data['land']=$req->land;
        $data['mobile']=$req->mobile;
        $data['office']=$req->office;
        $contact= DB::table('contacts')->insert($data);
       //return response()->json($data);
        
        if($contact){
            $notification=array(
              'message'=>'Successfully Inserted',
              'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
        }
        else{
            $notification=array(
              'message'=>'Something wrong!!',
              'alert-type'=>'error'
            );
            return Redirect()->back()->with($notification);
            
        }
        
    }
    
     public function allcontact()
    {
        
         $contact=DB::table('contacts')->get();
         return view ('allcontact',compact('contact'));
    }
    
     public function deletecontact($id)
    {
        
        $delete=DB::table('contacts')->where('id',$id)->delete();
         $notification=array(
              'message'=>'Successfully Deleted!!',
              'alert-type'=>'success'
            );
         return Redirect()->back()->with($notification);
    }
    
     public function editcontact($id)
    {
        $contact=DB::table('contacts')->where('id',$id)->first();
        return view('editcontact',compact('contact'));
    }
    
     public function updatecontact(Request $req,$id)
    {
          $data=array();
        $data['fname']=$req->fname;
        $data['lname']=$req->lname;
        $data['email']=$req->email;
        $data['address1']=$req->address1;
        $data['address2']=$req->address2;
        $data['address3']=$req->address3;
        $data['land']=$req->land;
        $data['mobile']=$req->mobile;
        $data['office']=$req->office;
        $contact= DB::table('contacts')->where('id',$id)->update($data);
       //return response()->json($data);
        
        if($contact){
            $notification=array(
              'message'=>'Successfully Updated',
              'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
        }
        else{
            $notification=array(
              'message'=>'nothing to update',
              'alert-type'=>'error'
            );
            return Redirect()->back()->with($notification);
            
        }
        
    }
    
      public function addresslist($id)
    {
        $contact=DB::table('contacts')->where('id',$id)->get();
        return view('addresslist',compact('contact'));
    }
    
     public function phonelist($id)
    {
        $contact=DB::table('contacts')->where('id',$id)->get();
        return view('phonelist',compact('contact'));
    }
}

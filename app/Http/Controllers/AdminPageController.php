<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminUser;
use App\Models\Notice;
use App\Models\Result;
use App\Models\Registration;
use App\Models\Gallery;
use Hash;
use Session;

class AdminPageController extends Controller
{
    public function index(){
        return view('adminPages.adminlogin');
    }

    public function dashboard(){
        return view('adminPages.index');
    }

    public function addAdminUser(){
        return view('adminPages.add-admin-user');
    }
    public function AdminUser(){
        return view('adminPages.admin-user');
    }

    public function notice(){
        return view('adminPages.notice');
    }

    public function result(){
        return view('adminPages.adminResult');
    }

    public function regreply(){
        return view('adminPages.reg-reply');
    }

    public function AdminGallery(){
        return view('adminPages.admin-gallery');
    }

    public function adminnoticeprocess(Request $request){
        $notice = new Notice();
        $notice->notice = $request->notice;
        $res = $notice->save();
        if ($res) {
            
            return redirect('admin/notice');
            

        }else {
            // $request->session()->flash('fail','Somthing went wrong');
            return back();
           
        }
    }

    public function addResultProcess(Request $request){
        
        // $request->validate([
        //     'name'=>'required',
        //     'email'=>'required|email|unique:users|indisposable',
        //     'password'=>'required|min:8|max:12',
        //     'number'=>'nullable|min:10|max:10',
        //     'profilePic'=>'required|image|mimes:jpg,png,jpeg'

        // ]);

        $filename = time().".pp.".$request->file('resultPic')->getClientOriginalExtension();
        $request->file('resultPic')->move(public_path('/images/Result'),$filename);

        $result = new Result();
        $result->studentName = $request->studentName;
        
        $result->symbolNo = $request->symbolNo;
        $result->resultPic = $filename;
        $res = $result->save();
        // return "save";

        if ($res) {
            
            return view('adminPages.adminResult');
            

        }else {
            // $request->session()->flash('fail','Somthing went wrong');
            return back();
           
        }
    }

    public function addAdminUserProcess(Request $request){
        
        // $request->validate([
        //     'name'=>'required',
        //     'email'=>'required|email|unique:users|indisposable',
        //     'password'=>'required|min:8|max:12',
        //     'number'=>'nullable|min:10|max:10',
        //     'profilePic'=>'required|image|mimes:jpg,png,jpeg'

        // ]);

        $filename = time().".pp.".$request->file('adminprofile')->getClientOriginalExtension();
        $request->file('adminprofile')->move(public_path('/images/AdminProfilePic'),$filename);

        $user = new AdminUser();
        $user->name = $request->adminfullname;
        $user->email = $request->adminmail;
        $user->password = Hash::make($request->adminpassword);
        $user->number = $request->adminnumber;
        $user->profilePic = $filename;
        $res = $user->save();
        // return "save";

        if ($res) {
            
            return view('adminPages.index');
            

        }else {
            // $request->session()->flash('fail','Somthing went wrong');
            return back();
           
        }
    }

    public function regReplyProcess(Request $request){
        

        $user = new Registration();
        $user->StudentName = $request->studentName;
        $user->email = $request->studentEmail;
        
        $user->number = $request->studentNumber;
        $user->birthDate = $request->studentBD;
        $user->gender = $request->gender;
        $user->address = $request->studentAddress;
        $res = $user->save();

        if ($res) {
            $request->session()->flash('pass','Registration Form Submitted...');
            return redirect('/apply-now');
            

        }else {
            // $request->session()->flash('fail','Somthing went wrong');
            return back();
           
        }
    }

    public function Logout(Request $request){
        if (session()->has('adminloginId')) {
            // session()->pull('loginId');
            $request->session()->forget('adminloginId');
            return redirect('admin');
        } else {
            # code...
        }
        
    }

    public function adminloginUser(Request $request){
        $request->validate([
            
            'email'=>'required|email',
            'password'=>'required|min:8|max:12'
            

        ]);

        new AdminUser();
        
        $users = AdminUser::where('email','=',$request->email)->first();
        if($users){
            if(Hash::check($request->password,$users->password)){
                $request->session()->put('adminloginId',$users->profile_uid);
                
                return redirect('/admin/dashboard');
                
                
                // return redirect('getStarted')->with(['users'=>$users]);
            }else{
                $request->session()->flash('notMatch','!!!Password does not match!!!');
                return redirect('/admin');
            }
        }else{
            $request->session()->flash('notRegister','!!!Email is not registered!!!');
            return redirect('/admin');
        }
    }




    public function showResultInMain(Request $request){
        

        new Result();
        
        $users = Result::where('symbolNo','=',$request->symbolNo)->first();
        if($users){
            $symbolNo = $users->symbolNo;
            $data = compact('symbolNo');
            
                
            $request->session()->flash('symbolNo',$users->symbolNo);
            return redirect('/result');
                
                
            
        }else{
            $request->session()->flash('notRegister','Symbol No. does not match !!!');
            return redirect('/result');
        }
    }

    public function addGalleryPic(Request $request){

        
        //  images data save

        new Gallery();

        
        foreach ($request->file('images') as $image) {

            
            $filename = time().".".$image->getClientOriginalName();
            $image->move(public_path('/images/Gallery'),$filename);
                

            $images = [
                'galleryPic' => $filename,
                    
            ];
    
            $final = Gallery::insert($images);
            
            
            
            

            
        }
        if ($final) {
            return redirect('/admin/gallery');
        }
        else {

            $request->session()->flash('notupload','Somthing Went Wrong !!!');
            return redirect('/admin/gallery');
        }

        

    }


    public function deleteinadmin($id){
        

        if ($id == session()->get('adminloginId')) {
            return back();
        }
        else {
            
            $AdminUser = AdminUser::find($id);
            if ($AdminUser) {
                $AdminUser->delete();
            }
            return back();
            
        }
        
    }

    public function deletenotice($id){
        
        new Notice();
        if ($id == session()->get('adminloginId')) {
            return back();
        }
        else {
            
            $Notice = Notice::find($id);
            if ($Notice) {
                $Notice->delete();
            }
            return back();
            
        }
        
    }

    public function deleteresult($id){
        
            new Result();
            $Result = Result::find($id);
            if ($Result) {
                $Result->delete();
                
            }
            return back();
            
        
    }

    public function deletereg($id){
        
        new Registration();
        $Registration = Registration::find($id);
        if ($Registration) {
            $Registration->delete();
            
        }
        return back();
        
    
}

public function deletegallery($id){
        
    new Gallery();
    $Gallery = Gallery::find($id);
    if ($Gallery) {
        $Gallery->delete();
        
    }
    return back();
    

}

}

<?php
namespace Zems\LrWeb;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Route;
use DB;

class ZemsWeb extends Controller
{
    public $method;
    public $request;
       
    public function index($data = false)
    {
        return view("lr_web::index");
    }    
    public function about($data = false)
    {
        return view("lr_web::about");
    }    
    public function acitivities($data = false)
    {
        return view("lr_web::acitivities");
    }    
    public function strategy($data = false)
    {
        return view("lr_web::strategy");
    }    
    public function donate($data = false)
    {
        return view("lr_web::donate");
    }    
    public function add_member($data = false)
    {
        return view("lr_web::add_member");
    }  
    public function member_process(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5048',
            
        ]);
        $dob = strtotime($request->dob);
        $dob = date('Y-m-d', $dob);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        $id = $user->id;
        $photo = '';
        $photo_id = '';
        if(isset($request->photo)){
        $photo = 'p_'.time().'.'.$request->photo->extension(); 
        $request->photo->move(public_path('uploads'), $photo);
        }
        // if(isset($request->photo)){
        // $photo_id = 's_'.time().'.'.$request->photo_id->extension(); 
        // $request->photo_id->move(public_path('uploads'), $photo_id);
        // }   
        $profile = new Profile();
        $profile->phone = $request->phone;
        $profile->address = $request->address;
        $profile->city = $request->city;
        $profile->post_code = $request->post_code;
        $profile->country = $request->country;
        $profile->sex = $request->sex;
        $profile->profession = $request->profession;
        $profile->nationality = $request->nationality;
        $profile->dob = $dob;
        // $profile->photo_id = $photo_id;
        $profile->photo = $photo;
        $profile->user_id = $id;
        $profile->save();
        
        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);

    }  
    
    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Redirect;
use Carbon\Carbon;
use App\Models\Country;
use App\Models\Investment;
use Log;
use Hash;
class Register extends Controller
{

    public function getUserNameAjax(Request $request)
    {

      $user =User::where('username',$request->user_id)->first();
            if($user)
            {
                return $user->name;
            } 
            else{
                return 1;
            }       
    }

    public function index()
    {
        return view('auth.register');
    }

    public function getPhoneCode(Request $request)
    {
        $countryName = $request->input('countryName');
        $country = Country::where('name', $countryName)->first();

        if ($country) {
            return response()->json(['phoneCode' => $country->phonecode]);
        } else {
            return response()->json(['error' => 'Country not found'], 404);
        }
    }

   public function find_position($snode,$pos)
    {
        $q=User::select('id')->where('Parentid',$snode)->where('position',$pos)->first();
        if (empty($q))
         {
           $this->downline = $snode; 
         }
         else
         {
          $user = $q->id;
            // print_r($user);die();
          $this->find_position($user,$pos);   
         }
    }


    public function register(Request $request)
    {
        try {
            $validation = Validator::make($request->all(), [
                'phone' => 'required|unique:users,phone',
                'password' => 'required|confirmed|min:5',
                'sponsor' => 'required|exists:users,username',
                'countryCode' => 'required',
                'username' => 'required|digits:6|unique:users,username',
            ]);
    
            if ($validation->fails()) {
                Log::info($validation->getMessageBag()->first());
                return Redirect::back()->withErrors($validation->getMessageBag()->first())->withInput();
            }
    
            // Get user's IP address
            $ipAddress = $request->ip();
    
            // Check if any user exists with the same IP address
            $existingUserWithIp = User::where('ip', $ipAddress)->first();
            if ($existingUserWithIp) {
                return Redirect::back()->withErrors('A user with this IP address already exists.')->withInput();
            }
    
            // Find the sponsor user
            $sponsor = User::where('username', $request->sponsor)->first();
            if (!$sponsor) {
                return Redirect::back()->withErrors('Introducer ID Not Active');
            }
    
            $post_array = $request->all();
            $country = $post_array['countryCode'];
            $countryCode = Country::where('name', $country)->first();
    
            // Prepare user data
            $data = [
                'phone' => $post_array['phone'],
                'username' => $post_array['username'],
                'password' => Hash::make($post_array['password']),
                'tpassword' => Hash::make(substr(time(), -2) . substr(rand(), -2) . substr(mt_rand(), -1)),
                'PSR' => $post_array['password'],
                'TPSR' => substr(time(), -2) . substr(rand(), -2) . substr(mt_rand(), -1),
                'sponsor' => $sponsor->id,
                'package' => 0,
                'jdate' => date('Y-m-d'),
                'created_at' => Carbon::now(),
                'remember_token' => substr(rand(), -7) . substr(time(), -5) . substr(mt_rand(), -4),
                'level' => $sponsor->level + 1,
                'ParentId' => User::orderBy('id', 'desc')->first()->id,
                'ip' => $ipAddress,
                'dialCode' => $countryCode->phonecode,
            ];
    
            // Create the user
            $user_data = User::create($data);
    
            // Create initial investment record
            $invoice = substr(str_shuffle("0123456789"), 0, 7);
            $investment_data = [
                'orderId' => $invoice,
                'transaction_id' => $invoice,
                'user_id' => $user_data->id,
                'user_id_fk' => $user_data->username,
                'amount' => 300,
                'payment_mode' => "USDT",
                'investType' => 2,
                'status' => 'Active',
                'sdate' => date('Y-m-d'),
                'active_from' => $user_data->username,
                'created_at' => date('Y-m-d H:i:s'),
            ];
            Investment::insert($investment_data);
    
            Auth::loginUsingId($user_data->id);
    
            return redirect()->route('user.dashboard');
        } catch (\Exception $e) {
            Log::info('Error during registration: ' . $e->getMessage());
            return back()->withErrors('error', $e->getMessage())->withInput();
        }
    }
    
    
    
    
    // In RegistrationController.php
public function showRegistrationForm($sponsorCode)
{
    return view('registrationForm', ['sponsorCode' => $sponsorCode]);
}



    public function register22(Request $request)
    {
        try{
            $validation =  Validator::make($request->all(), [
                'email' => 'required',
                'name' => 'required',
                  'position' => 'required',
                'password' => 'required|min:5',
                'sponsor' => 'required|exists:users,username',
                'phone' => 'required|numeric|min:10'
              
            ]);

            
            if($validation->fails()) {

                Log::info($validation->getMessageBag()->first());
     
                return Redirect::back()->withErrors($validation->getMessageBag()->first())->withInput();
            }
            //check if email exist
          
            $user = User::where('username',$request->sponsor)->first();
            if(!$user)
            {
                return Redirect::back()->withErrors(array('Introducer ID Not Active'));
            }
            
            
            
            for ($i=150; $i < 250 ; $i++) 
            { 
          
              $totalID = User::count();
            $totalID++;
            $username =substr(time(),4).$totalID;
             $username =substr(rand(),-2).substr(time(),-3).substr(mt_rand(),-2);
            
           $tpassword =substr(time(),-2).substr(rand(),-2).substr(mt_rand(),-1);
            $post_array  = $request->all();
                //  
          
            $data['name'] = "Sip fx ".$i;
            $data['phone'] = '1234567890';
            $data['username'] = $username;
            $data['email'] = 'sipfx'.$i."@gmail.com";
            $data['password'] =   Hash::make($post_array['password']);
            $data['tpassword'] =   Hash::make($tpassword);
            $data['PSR'] =  $post_array['password'];
            $data['position'] = $post_array['position'];
            $data['TPSR'] =  $tpassword;
            $data['sponsor'] = $user->id;
            $data['package'] = 0;
            $data['jdate'] = date('Y-m-d');
            $data['created_at'] = Carbon::now();
            $data['remember_token'] = substr(rand(),-7).substr(time(),-5).substr(mt_rand(),-4);
             $this->downline="";
            $this->find_position($user->id,$post_array['position']);
            $sponsor_user =  $this->downline; 
           $data['level'] = $user->level+1;

         
            $data['ParentId'] =  $sponsor_user;
            $user_data =  User::create($data);
            $registered_user_id = $user_data['id'];
            // $user = User::find($registered_user_id);
            Auth::loginUsingId($registered_user_id);
          
            //  sendEmail($user->email, 'Welcome to '.siteName(), [
            //     'name' => $user->name,
            //     'username' => $user->username,
            //     'password' => $user->PSR,
            //     'tpassword' => $user->TPSR,
            //     'viewpage' => 'register_sucess',
            //      'link'=>route('login'),
            // ]);
            
            }

        
            // return redirect()->route('home');
            $notify[] = ['success', 'Registration Successfully'];
             return redirect()->route('user.dashboard')->withNotify($notify);

        }
        catch(\Exception $e){
            Log::info('error here');
            Log::info($e->getMessage());
            print_r($e->getMessage());
            die("hi");
            return back()->withErrors('error', $e->getMessage())->withInput();
           
        }

          
    } 

}

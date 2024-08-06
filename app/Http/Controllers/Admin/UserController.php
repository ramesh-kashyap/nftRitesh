<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Crypt;
use App\Models\Income;
use App\Models\Investment;
use App\Models\Collection;
use App\Models\CollectionDetail;

use App\Models\Bank;
use App\Models\Withdraw;
use App\Models\BuyFund;
use App\Models\Activitie;
use App\Models\Admin_notices;


use Auth;
use DB;
use Log;
use Validator;
use Redirect;
use Helper;
use Storage;
use Carbon\Carbon;

class UserController extends Controller
{

    public function alluserlist(Request $request)
    {
        $limit = $request->limit ? $request->limit : paginationLimit();
        $status = $request->status ? $request->status : null;
        $search = $request->search ? $request->search : null;
        $notes = User::orderBy('id', 'ASC');

        if($search <> null && $request->reset!="Reset"){
            $notes = $notes->where(function($q) use($search){
              $q->Where('name', 'LIKE', '%' . $search . '%')
              ->orWhere('username', 'LIKE', '%' . $search . '%')
              ->orWhere('email', 'LIKE', '%' . $search . '%')
              ->orWhere('phone', 'LIKE', '%' . $search . '%')
              ->orWhere('jdate', 'LIKE', '%' . $search . '%')
              ->orWhere('active_status', 'LIKE', '%' . $search . '%');
            });

          }
                $notes = $notes->orderBy('id', 'ASC')->paginate($limit)
                    ->appends([
                        'limit' => $limit
                    ]);

                    $this->data['alluserlist'] =  $notes;
                    $this->data['search'] = $search;
                    $this->data['page'] = 'admin.users.alluserlist';
                    return $this->admin_dashboard();


    }



            public function userSummary(Request $request)
            {
                $limit = $request->limit ? $request->limit : paginationLimit();
                $status = $request->status ? $request->status : null;
                $search = $request->search ? $request->search : null;
                $notes = User::orderBy('id', 'ASC');
        
                if($search <> null && $request->reset!="Reset"){
                    $notes = $notes->where(function($q) use($search){
                      $q->Where('name', 'LIKE', '%' . $search . '%')
                      ->orWhere('username', 'LIKE', '%' . $search . '%')
                      ->orWhere('email', 'LIKE', '%' . $search . '%')
                      ->orWhere('phone', 'LIKE', '%' . $search . '%')
                      ->orWhere('jdate', 'LIKE', '%' . $search . '%')
                      ->orWhere('active_status', 'LIKE', '%' . $search . '%');
                    });
        
                  }
                $notes = $notes->orderBy('id', 'ASC')->paginate($limit)
                    ->appends([
                        'limit' => $limit
                    ]);

                    $this->data['alluserlist'] =  $notes;
                    $this->data['search'] = $search;
                    $this->data['page'] = 'admin.users.userSummary';
                    return $this->admin_dashboard();
            
            
                }
            



    public function pendingActivities(Request $request)
    {
        $limit = $request->limit ? $request->limit : paginationLimit();
        $status = $request->status ? $request->status : null;
        $search = $request->search ? $request->search : null;
        $notes = Activitie::where('status','Pending')->orderBy('id', 'ASC');

        if($search <> null && $request->reset!="Reset"){
            $notes = $notes->where(function($q) use($search){
              $q->Where('name', 'LIKE', '%' . $search . '%')
              ->orWhere('username', 'LIKE', '%' . $search . '%')
              ->orWhere('email', 'LIKE', '%' . $search . '%')
              ->orWhere('phone', 'LIKE', '%' . $search . '%')
              ->orWhere('jdate', 'LIKE', '%' . $search . '%')
              ->orWhere('active_status', 'LIKE', '%' . $search . '%');
            });
          }
        $notes = $notes->orderBy('id', 'ASC')->paginate($limit)
            ->appends([
                'limit' => $limit
            ]);
            $this->data['activities'] =  $notes;
            $this->data['search'] = $search;
            $this->data['page'] = 'admin.activities.pendingActivities';
            return $this->admin_dashboard();


    }

    public function activities_list(Request $request)
    {
        $limit = $request->limit ? $request->limit : paginationLimit();
        $status = $request->status ? $request->status : null;
        $search = $request->search ? $request->search : null;
        $notes = Activitie::whereIn('status',['Approved','Rejected'])->orderBy('id', 'ASC');

        if($search <> null && $request->reset!="Reset"){
            $notes = $notes->where(function($q) use($search){
              $q->Where('name', 'LIKE', '%' . $search . '%')
              ->orWhere('username', 'LIKE', '%' . $search . '%')
              ->orWhere('email', 'LIKE', '%' . $search . '%')
              ->orWhere('phone', 'LIKE', '%' . $search . '%')
              ->orWhere('jdate', 'LIKE', '%' . $search . '%')
              ->orWhere('active_status', 'LIKE', '%' . $search . '%');
            });
          }
        $notes = $notes->orderBy('id', 'ASC')->paginate($limit)
            ->appends([
                'limit' => $limit
            ]);
            $this->data['activities'] =  $notes;
            $this->data['search'] = $search;
            $this->data['page'] = 'admin.activities.activities_list';
            return $this->admin_dashboard();


    }


    public function active_users(Request $request)
    {
        $limit = $request->limit ? $request->limit : paginationLimit();
        $status = $request->status ? $request->status : null;
        $search = $request->search ? $request->search : null;
        $notes = User::where('active_status','Active')->orderBy('id', 'ASC');

       if($search <> null && $request->reset!="Reset"){
        $notes = $notes->where(function($q) use($search){
          $q->Where('name', 'LIKE', '%' . $search . '%')
          ->orWhere('username', 'LIKE', '%' . $search . '%')
          ->orWhere('email', 'LIKE', '%' . $search . '%')
          ->orWhere('phone', 'LIKE', '%' . $search . '%')
          ->orWhere('jdate', 'LIKE', '%' . $search . '%')
          ->orWhere('active_status', 'LIKE', '%' . $search . '%');
        });

      }
            $notes = $notes->paginate($limit)
                ->appends([
                    'limit' => $limit
                ]);

     $this->data['active_user'] =  $notes;
     $this->data['search'] = $search;
     $this->data['page'] = 'admin.users.active-user';
     return $this->admin_dashboard();

    }



        public function pending_users(Request $request)
        {
            $limit = $request->limit ? $request->limit : paginationLimit();
            $status = $request->status ? $request->status : null;
            $search = $request->search ? $request->search : null;
            $notes = User::where('active_status','Pending')->orderBy('id', 'ASC');

          if($search <> null && $request->reset!="Reset"){
            $notes = $notes->where(function($q) use($search){
              $q->Where('name', 'LIKE', '%' . $search . '%')
              ->orWhere('username', 'LIKE', '%' . $search . '%')
              ->orWhere('email', 'LIKE', '%' . $search . '%')
              ->orWhere('phone', 'LIKE', '%' . $search . '%')
              ->orWhere('jdate', 'LIKE', '%' . $search . '%')
              ->orWhere('active_status', 'LIKE', '%' . $search . '%');
            });

          }
                $notes = $notes->paginate($limit)
                    ->appends([
                        'limit' => $limit
                    ]);

        $this->data['active_user'] =  $notes;
        $this->data['search'] = $search;
        $this->data['page'] = 'admin.users.pending-user';
        return $this->admin_dashboard();

        }

    public function edit_users(Request $request)
    {
        $limit = $request->limit ? $request->limit : paginationLimit();
        $status = $request->status ? $request->status : null;
        $search = $request->search ? $request->search : null;
        $notes = User::orderBy('id', 'ASC');

        if($search <> null && $request->reset!="Reset"){
            $notes = $notes->where(function($q) use($search){
              $q->Where('name', 'LIKE', '%' . $search . '%')
              ->orWhere('username', 'LIKE', '%' . $search . '%')
              ->orWhere('email', 'LIKE', '%' . $search . '%')
              ->orWhere('phone', 'LIKE', '%' . $search . '%')
              ->orWhere('jdate', 'LIKE', '%' . $search . '%')
              ->orWhere('active_status', 'LIKE', '%' . $search . '%');
            });

          }
    $notes = $notes->paginate($limit)
        ->appends([
            'limit' => $limit
        ]);

        $this->data['edit_users'] =  $notes;
        $this->data['search'] = $search;
        $this->data['page'] = 'admin.users.edit-users';
        return $this->admin_dashboard();


    }
    
  public function user_activation()
    {
     
     $this->data['page'] = 'admin.users.user_activate';
     return $this->admin_dashboard();

    }
public function add_bonus()
    {
     
     $this->data['page'] = 'admin.users.add-bonus';
     return $this->admin_dashboard();

    }


    public function activate_admin_post(Request $request)
    {


      try{
            $validation =  Validator::make($request->all(), [
                'memberID' => 'required|exists:users,username',
                'amount' => 'required',
               
              
            ]);

            if($validation->fails()) {
                Log::info($validation->getMessageBag()->first());

                return Redirect::back()->withErrors($validation->getMessageBag()->first())->withInput();
            }
            
              

                $user=User::where('username',$request->memberID)->orderBy('id','desc')->first();
               
                  $invoice = substr(str_shuffle("0123456789"), 0, 7);
            
                   $amount=  $request->amount;
                      $plan ='BEGINNER';
                    if ($amount>=30 && $amount<=200) 
                       {
                        $plan ='BEGINNER';
                       }
                       elseif($amount>=400 && $amount<=800)
                       {
                        $plan ='STANDARD';
                       }
                       elseif($amount>=1000 && $amount<=2000)
                       {
                        $plan ='EXCLUSIVE';
                       }
                       elseif($amount>=2500 && $amount<=5000)
                       {
                        $plan ='ULTIMATE';
                       }
                
                       elseif($amount>=5000 && $amount<=10000)
                       {
                        $plan ='PREMIUM';
                       }
                
                       elseif($amount>=5000)
                       {
                        $plan ='PREMIUM';
                       }
                       
                       
                    //   dd($plan);
                  $invest_check=Investment::where('user_id',$user->id)->where('status','!=','Decline')->where('plan',$plan)->orderBy('id','desc')->limit(1)->first();
                  $invoice = substr(str_shuffle("0123456789"), 0, 7);
                  
                  


                //   if(!empty($invest_check))
                //      {
                //       $check_ex=($invest_check->amount)?$invest_check->amount:0;
                //      }
                //      else
                //      {
                //          $check_ex=0;
                //      }

                //      // print($check_ex);die();
                //      if ($request->amount>=$check_ex) 
                //      {
                     $candition=true;
                    //  }
                    //  else
                    //  {
                    //  $candition=false;
                    //  }

        
                   
                   $roiCandition= 0;
                
       
              
              	   $data = [
                        'plan' => $plan,
                        'transaction_id' => md5(uniqid(rand(), true)),
                        'user_id' => $user->id,
                        'user_id_fk' => $user->username,
                        'amount' => $request->amount,
                        'payment_mode' => 'USDT',
                        'status' => 'Active',
                        'sdate' => Date("Y-m-d"),
                        'active_from' => 'Admin',
                        'roiCandition' => $roiCandition,
                        
                    ];
                  
                     $users = User::where('id',$user->id)->first();
                  if ($users->active_status=="Pending")
                   {
                    $user_update=array('active_status'=>'Active','adate'=>Date("Y-m-d H:i:s"),'package'=>$request->amount);
                  User::where('id',$user->id)->update($user_update);
                  
                    \DB::table('general_settings')->where('id',1)->update(['people_online'=> generalDetail()->people_online+1]);
                     \DB::table('general_settings')->where('id',1)->update(['our_investors'=> generalDetail()->our_investors+1]);
        
                  }
                   else
                 {
                  $total = $users->package+$request->amount;
                    $user_update=array('package'=>$total,'active_status'=>'Active',);
                  User::where('id',$user->id)->update($user_update); 
                 }
                      
                  $payment =  Investment::insert($data);
                    \DB::table('general_settings')->where('id',1)->update(['total_fund_invested'=>generalDetail()->total_fund_invested+$request->amount]);
                
                     
                //   add_direct_income($user->id,$request->amount);
        //   
                $notify[] = ['success', 'User Activation successfully'];
               return redirect()->back()->withNotify($notify);
             
                 

          }
           catch(\Exception $e){
            Log::info('error here');
            Log::info($e->getMessage());
            print_r($e->getMessage());
            die("hi");
            return  redirect()->route('user-activation')->withErrors('error', $e->getMessage())->withInput();
              }
        

    }
    

public function add_bonus_post(Request $request)
    {


      try{
            $validation =  Validator::make($request->all(), [
                'memberID' => 'required|exists:users,username',
                'amount' => 'required',
                'remarks' => 'required',
               
              
            ]);

            if($validation->fails()) {
                Log::info($validation->getMessageBag()->first());

                return Redirect::back()->withErrors($validation->getMessageBag()->first())->withInput();
            }
            
              

                $user=User::where('username',$request->memberID)->orderBy('id','desc')->first();
  
                     $bonus= $request->amount;
                   $data['remarks'] =$request->remarks;
                    $data['comm'] = $bonus;
                    $data['amt'] = $bonus;
                    $data['level']=1;
                    $data['ttime'] = date("Y-m-d");
                    $data['user_id_fk'] =$user->username;
                    $data['user_id']=$user->id; 
                  $income = Income::Create($data);   
    
                $notify[] = ['success', 'Bonus Added successfully'];
               return redirect()->back()->withNotify($notify);
             
                 

          }
           catch(\Exception $e){
            Log::info('error here');
            Log::info($e->getMessage());
            print_r($e->getMessage());
            die("hi");
            return  redirect()->route('user-activation')->withErrors('error', $e->getMessage())->withInput();
              }
        

    }
    




    public function activate_admin_post2(Request $request)
    {


      try{
            $validation =  Validator::make($request->all(), [
                'memberID' => 'required|exists:users,username',
                'amount' => 'required|numeric|min:50',
               
              
            ]);

            if($validation->fails()) {
                Log::info($validation->getMessageBag()->first());

                return Redirect::back()->withErrors($validation->getMessageBag()->first())->withInput();
            }
            
              

                $user=User::where('username',$request->memberID)->orderBy('id','desc')->first();
               
                  $invoice = substr(str_shuffle("0123456789"), 0, 7);
                    
                  $invest_check=Investment::where('user_id',$user->id)->where('status','!=','Decline')->orderBy('id','desc')->limit(1)->first();
                  $invoice = substr(str_shuffle("0123456789"), 0, 7);
                  
                  $originalDate = "2010-03-21";
                 $newDate = date("Y-m-d", strtotime($request->activation_date));
                 $newDateTime = $newDate." 10:20:00";


                //   if(!empty($invest_check))
                //      {
                //       $check_ex=($invest_check->amount)?$invest_check->amount:0;
                //      }
                //      else
                //      {
                //          $check_ex=0;
                //      }

                //      // print($check_ex);die();
                //      if ($request->amount>=$check_ex) 
                //      {
                     $candition=true;
                    //  }
                    //  else
                    //  {
                    //  $candition=false;
                    //  }

            //   if (!$invest_check)
            //   {
                   
                   $roiCandition= 0;
                
              
              	   $data = [
                        'plan' => $invoice,
                        'transaction_id' => md5(uniqid(rand(), true)),
                        'user_id' => $user->id,
                        'user_id_fk' => $user->username,
                        'amount' => $request->amount,
                        'payment_mode' => 'USDT',
                        'status' => 'Active',
                        'sdate' =>$newDate,
                        'active_from' => $user->username,
                        'roiCandition' => $roiCandition,
                        'created_at' => $newDateTime,
                        
                    ];
                  
                     $users = User::where('id',$user->id)->first();
                  if ($users->active_status=="Pending")
                   {
                    $user_update=array('active_status'=>'Active','adate'=>$newDateTime,'package'=>$request->amount,'jdate'=>$newDate,'created_at'=>$newDateTime);
                  User::where('id',$user->id)->update($user_update);
                  }
                   else
                 {
                  $total = $users->package+$request->amount;
                    $user_update=array('package'=>$total,'active_status'=>'Active','jdate'=>$newDate,'created_at'=>$newDateTime);
                  User::where('id',$user->id)->update($user_update); 
                 }
                      
                  $payment =  Investment::insert($data);
                  
                  add_direct_income_new($user->id,$request->amount,$newDate,$newDateTime);
          
                $notify[] = ['success', 'User Activation successfully'];
               return redirect()->back()->withNotify($notify);
            //   }
            //   else
            //   {
            //       return Redirect::back()->withErrors(array('User ALready Active '));
            //   }
                 

          }
           catch(\Exception $e){
            Log::info('error here');
            Log::info($e->getMessage());
            print_r($e->getMessage());
            die("hi");
            return  redirect()->route('user-activation')->withErrors('error', $e->getMessage())->withInput();
              }
        

    }
    



    public function edit_users_view($id)
    {

    try {
        $id = Crypt::decrypt($id);
        } catch (\Illuminate\Contracts\Encryption\DecryptException $e) {
        return back()->withErrors(array('Invalid User!'));
    }

    $profile = User::where('id',$id)->first();
     $bank = Bank::where('user_id',$id)->first();
    $this->data['bank'] =  $bank;
    $this->data['profile'] =  $profile;
    $this->data['page'] = 'admin.users.users_profile_view';
    return $this->admin_dashboard();

   }

    public function my_level_team_count($userid,$level=10){
        $arrin=array($userid);
        $ret=array();
        $i=1;
        while(!empty($arrin)){
            $alldown=User::select('id')->whereIn('sponsor',$arrin)->get()->toArray();
            if(!empty($alldown)){
                $arrin = array_column($alldown,'id');
                $ret[$i]=$arrin;
                $i++;

            }else{
                $arrin = array();
            }
        }

        $final = array();
        if(!empty($ret)){
            array_walk_recursive($ret, function($item, $key) use (&$final){
                $final[] = $item;
            });
        }


        return $final;

    }


  public function available_balance()
    {
    $balance = (Auth::user()->users_incomes()+Auth::user()->tradingBalance()) - (Auth::user()->withdraw());
    return $balance;
    } 


    public function profile_view($id)
    {
    
        try {
            $id = Crypt::decrypt($id);
            } catch (\Illuminate\Contracts\Encryption\DecryptException $e) {
            return back()->withErrors(array('Invalid User!'));
        }
    
        $profile = User::where('id',$id)->first();
         $bank = Bank::where('user_id',$id)->first();
         $tolteam=$this->my_level_team_count($profile->id);
          $total_team=User::whereIn('id',(!empty($tolteam)?$tolteam:array()))->where('active_status','Active')->count();
         $user_direct=User::where('sponsor',$profile->id)->where('active_status','Active')->count();
         $directIds=User::where('sponsor',$profile->id)->where('active_status','Active')->pluck('id');
        $totalBusiness=User::whereIn('id',$directIds)->where('active_status','Active')->sum('package');
       $this->data['team_business'] =User::whereIn('id',(!empty($tolteam)?$tolteam:array()))->where('active_status','Active')->sum('package');
       
       
        $this->data['user_direct'] =  $user_direct;
        $this->data['totalTeam'] =  $total_team;
        $this->data['totalBusiness'] =  $totalBusiness;
        $this->data['bank'] =  $bank;
        $this->data['profile'] =  $profile;
        $this->data['page'] = 'admin.users.profile-view';
        return $this->admin_dashboard();

   }

   public function users_profile_update(Request $request)

   {
       try{
           $validation =  Validator::make($request->all(), [
               'email' => 'required',
               'name' => 'required',
               'phone' => 'required|numeric'

           ]);

           if($validation->fails()) {
               Log::info($validation->getMessageBag()->first());

               return Redirect::back()->withErrors($validation->getMessageBag()->first())->withInput();
           }


           //check if email exist
         $post_array  = $request->all();
           $id=$post_array['id'];
         $update_data['name']=$post_array['name'];
         $update_data['phone']=$post_array['phone'];
         if(!empty($post_array['password']))
         {
           $update_data['password']= \Hash::make($post_array['password']);
         }
          $update_data['usdtTrc20']=$post_array['trx_addres'];
         $update_data['email']=$post_array['email'];
        //   $bank_array['account_holder']=$post_array['account_holder'];
        //   $bank_array['bank_name']=$post_array['bank_name'];
        //   $bank_array['branch_name']=$post_array['branch_name'];
        //   $bank_array['account_no']=$post_array['account_no'];
        //   $bank_array['user_id']=$id;
        //   $bank_array['ifsc_code']=$post_array['ifsc_code'];

         $user =  user::where('id',$id)->update($update_data);
        //  if(!empty($bank_array['account_holder']) && !empty($bank_array['account_no']))
        //  {
        //       Bank::updateOrCreate(['user_id'=>$id],$bank_array);
        //  }
       $notify[] = ['success', 'Updated successfully'];
       return redirect()->back()->withNotify($notify);

         }
          catch(\Exception $e){
           Log::info('error here');
           Log::info($e->getMessage());
           print_r($e->getMessage());
           die("hi");
           return back()->withErrors('error', $e->getMessage())->withInput();
           //return response(array('success'=>0,'statuscode'=>500,'msg'=>$e->getMessage()),500);
       }
   }



   public function block_users(Request $request)
    {
        $limit = $request->limit ? $request->limit : paginationLimit();
        $status = $request->status ? $request->status : null;
        $search = $request->search ? $request->search : null;
        $notes = User::wherein('active_status',array('Active','Block','Inactive'))->orderBy('id', 'ASC');;

        if($search <> null && $request->reset!="Reset"){
            $notes = $notes->where(function($q) use($search){
              $q->Where('name', 'LIKE', '%' . $search . '%')
              ->orWhere('username', 'LIKE', '%' . $search . '%')
              ->orWhere('email', 'LIKE', '%' . $search . '%')
              ->orWhere('phone', 'LIKE', '%' . $search . '%')
              ->orWhere('jdate', 'LIKE', '%' . $search . '%')
              ->orWhere('active_status', 'LIKE', '%' . $search . '%');
            });

          }
                $notes = $notes->paginate($limit)
                    ->appends([
                        'limit' => $limit
                    ]);

                    $this->data['active_user'] =  $notes;
                    $this->data['search'] = $search;
                    $this->data['page'] = 'admin.users.block-users';
                    return $this->admin_dashboard();


        }
        public function block_submit(Request $request)
        {

          $id= $request->id; // or any params
          $update_data['active_status']= $request->status;
          $user =  user::where('id',$id)->update($update_data);

        $notify[] = ['success', 'User '.$request->status.' successfully'];
        return redirect()->back()->withNotify($notify);
      }



      public function activities_submit(Request $request)
      {

        $id= $request->id; // or any params
        $update_data['status']= $request->status;
        $user =  Activitie::where('id',$id)->update($update_data);

        $notify[] = ['success', 'Request '.$request->status.' successfully'];
        return redirect()->back()->withNotify($notify);
    }

    public function addnft()
    {
     
     $this->data['page'] = 'admin.users.addnft';
     return $this->admin_dashboard();

    }


          
    public function addnftt(Request $request)
    {

    try{
        $validation =  Validator::make($request->all(), [
            'name' => 'required',
          
            'volume' => 'required',
           
            'price' => 'required',
            'description' => 'required',

        ]);


        if($validation->fails()) {
            Log::info($validation->getMessageBag()->first());

            return Redirect::back()->withErrors($validation->getMessageBag()->first())->withInput();
        }

    
        $nft=Collection::where('name',$request->name)->first();
            if (!$nft)          
            {
                $icon_image = $request->file('img');
                $imageName = time().'.'.$icon_image->extension();
                $request->img->move(public_path('image/'),$imageName);
                
                
           $data = [
                'name' =>$request->name,
                'description' =>$request->description,
              
                'price' =>$request->price,
                'volume' => $request->volume,
                 'img' => 'image/'.$imageName,
            ];
            $payment = Collection::firstOrCreate(['name'=>$request->name],$data);

            $notify[] = ['success', ' NFT Details Added successfully'];
            return redirect()->back()->withNotify($notify);

          
               # code...
           }
          else
          {
            return Redirect::back()->withErrors(array('NFT already Exists! '));
          }

        }
       catch(\Exception $e){
        Log::info('error here');
        Log::info($e->getMessage());
        print_r($e->getMessage());
        die("hi");
        return  Redirect::back()->withErrors('error', $e->getMessage())->withInput();
        }


        }




        public function addnftimage()
        {
          $categories = DB::table('collections')->get();

          // dd($categories);
          // Pass the data to the view
          $this->data['categories'] = $categories;
         $this->data['page'] = 'admin.users.addnftimage';
         return $this->admin_dashboard();
    
        }

                  
    public function addnft_post(Request $request)
    {

    try{
        $validation =  Validator::make($request->all(), [
            // 'id' => 'required',
           
            'collection_id' => 'required',
            'number' => 'required',
          
            'price' => 'required',
            'img'=>'max:4096|mimes:jpeg,png,jpg,svg,webp,avif',

        ]);

          // dd($validation);
        if($validation->fails()) {
            Log::info($validation->getMessageBag()->first());

            return Redirect::back()->withErrors($validation->getMessageBag()->first())->withInput();
        }

    
    
                $icon_image = $request->file('img');
                $imageName = time().'.'.$icon_image->extension();
                $request->img->move(public_path('image/'),$imageName);
                
                
           $data = [
                // 'id' =>$request->id,
                'collection_id' => $request->collection_id,
                'number' =>$request->number,
                'price' =>$request->price,
              
                 'img' => 'image/'.$imageName,
            ];

            $payment = CollectionDetail::Create($data);

            $notify[] = ['success', ' NFT Details Added successfully'];
            return redirect()->back()->withNotify($notify);

          
               # code...
           
        

        }
       catch(\Exception $e){
        Log::info('error here');
        Log::info($e->getMessage());
        print_r($e->getMessage());
        die("hi");
        return  Redirect::back()->withErrors('error', $e->getMessage())->withInput();
        }


        }

        public function noticepage(){
          $admin_notice=Admin_notices::get()?? 0;        
         $this->data['admin_notice'] = $admin_notice;
          $this->data['page'] = 'admin.users.notices';
                    return $this->admin_dashboard();          
        }

        public function addnotice(Request $request)
{
    // Validate the request data
    $validatedData = $request->validate([
        'title' => 'required',
        'notice'=> 'required',
    ]);

    // Create a new Admin_notice record
    Admin_notices::create([
        'title' => $validatedData['title'],
        'notice' => $validatedData['notice'],
    ]);

    // Redirect or return a response
    return redirect()->back()->with('success', 'Notice added successfully.');
}

public function del_notice(Request $request){
  DB::table('Admin_notices')->where('id', $request->id)->delete();
  return redirect()->back()->with('success', 'Notice added successfully.');
}

        

}

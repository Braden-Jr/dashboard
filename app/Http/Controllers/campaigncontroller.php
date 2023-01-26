<?php

namespace App\Http\Controllers;
use App\Models\Campaign;
use App\Models\allProjects;
use App\Models\Roles;
use App\Models\User;
use Hash, Auth;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class campaigncontroller extends Controller
{
    
    // All Projects/ Campaign
    function allProjects(){
        $client= allProjects::paginate(10); 
        return view('projects',['data'=>$client]);
    }
    function allProjectsUser(){
        $client= allProjects::paginate(10); 
        return view('userdashboard',['data'=>$client]);
    }

    function campaignAll(Request $request){
        $campaign=Campaign::where('project_id',$request->id)->paginate(5);
        
      
        return view('campaignall',['data'=>$campaign]);
        
        
    }

    // Display Admin Accounts

    function allAdmin(){
        $client= User::where('type','admin')->paginate(5); 
        return view('adminaccounts',['data'=>$client]);
    }
    function allUser(){
        $client= User::where('type','user')->paginate(5); 
        return view('useraccounts',['data'=>$client]);
    }

    

    //show birthdays
function birthdays(){

    $date=now();

        Campaign::whereMonth('birthdate', Carbon::now()->format('m'))
        ->whereDay('birthdate', Carbon::now()->format('d'))
        ->get();
}

    // Update Campaign//

    function updateClient(Request $request){
        $client =allprojects::find($request->uid);
      

   if($client){
    $client->name_of_campaign = $request->name;
    $client->team_leader = $request->leader;
    $client->total_number_of_positions = $request->positions;
    $client->number_of_personnel = $request->personnel;
    $client->status = $request->status;

    $client->save();
  
    return back()->with("update successfully");
   }
}

//update password



      // Update Employee//

  function updateEmployee(Request $request){
    $client =campaigns::find($request->uid);
  

if($client){
$client->name= $request->name;
$client->employee_no= $request->employee_no;
$client->hire_date = $request->hire_date;
$client->contact_number = $request->contact_number;
$client->birthdate = $request->birthdate;
$client->project_name= $request->project_name;
$client->designation= $request->designation;
$client->tenure = $request->tenure;
$client->total_it_exp = $request->total_it_exp ;
$client->status = $request->status;

$client->save();

return back()->with("update successfully");
}
}

    // Add Campaign //

    function addcampaign(Request $request){
        if($request->name_of_campaign =="" || $request->team_leader =="" ||$request->total_number_of_positions ==""||$request->number_of_personnel ==""||$request->status =="" )
        {
            return back()->with('status','Invalid empty fields.');
        }
        else{
            $status = 'Active';
            $user = allprojects::create($request->name_of_campaign,$request->team_leader,$request->total_number_of_positions,$request->number_of_personnel,$status);
            return back()->with('status','Campaign Added.');
        }
    }

    //Delete Campaign //

    function deletecampaign(Request $request){
        $client =allProjects::find($request->did);
        
   if($client){

    $client->status = $request->delete;

    $client->save();
    return back()->with("update successfully");
    

   }
   else{
    return back()->with("failed");
   }
    }


    //Add Employee//

    function addemployee(Request $request){
        if($request->campaign =="" || $request->leader =="" ||$request->positions ==""||$request->personnel =="")
        {
            return back()->with('status','Invalid empty fields.');
        }
        else{
            $status = 'Active';
            $user = allprojects::create($request->campaign,$request->leader,$request->positions,$request->personnel,$status);
            return back()->with('status','Campaign Added.');
        }
    }



    // Signup //

    function signup(Request $request){
        // if($request->name ==""||$request->email =="" ||$request->password == ""){
        //     return back()->with('status','Invalid empty fields.');
        // }
        // else{
            $client = '2';
            $status = 'Active';
            $user = user::create($request->name,$request->email,$request->password,$client,$status);
            return back()->with('status','Account Created.');
            
        // }
    }   

    //Admin Signup

    function adminsignup(Request $request){
        // if($request->name ==""||$request->email =="" ||$request->password == ""){
        //     return back()->with('status','Invalid empty fields.');
        // }
        // else{
            $client = 'admin';
            $status = 'Active';
            $user = user::create($request->name,$request->employee_number,$request->password,$client,$status,$request->type);
            return back()->with('status','Account Created.');
            
        // }
    }   
    function usersignup(Request $request){
        // if($request->name ==""||$request->email =="" ||$request->password == ""){
        //     return back()->with('status','Invalid empty fields.');
        // }
        // else{
            $client = 'user';
            $status = 'Active';
            $user = user::create($request->name,$request->employee_number,$request->password,$client,$status,$request->type);
            return back()->with('status','Account Created.');
            
        // }
    }  



    //userlogin
    function userLogin(Request $request){ 
 
        $credential=[
          'employee_number' => $request->employee_number,
          'password' => $request->password
        ];

            
        $loginAttempt= Auth::attempt($credential);
        if( $loginAttempt){
          $request->session()->regenerate();
          $user = user::firstWhere('employee_number', $request->employee_number);
         session()->put('name', $user->name);
         session()->put('employee_number', $user->employee_number);
         session()->put('password', $user->password);
         session()->put('type', $user->type);
         session()->put('ids', $user->id);

         session()->save();
      
         if ($user->type == "admin") {
            return redirect('/userdashboard');
          }
          elseif($user->type =="user"){
          
            return redirect('/userdashboard');
          }
      }
    
      elseif($request->employee_number == ""){
        return back()->with('status',"You need to input something");
      }
      else{
          return back()->with('status',"incorrect username or password");
      }
    }

//change
 function changePass(Request $request)
{
    $client =User::find($request->uid);
    if(Hash::check($request->old,$client->password)){
        if($request->new == $request->confirm){
            $client->password = Hash::make($request->new);
           
        
            $client->save();
          
            return back()->with("update successfully");
            
        
           }
           else{
            return back()->with("Confirm password and new password doesn't match");
           }
    }
    else{
        return back()->with("failed");
       }
}
function getLogOut(Request $request){
    Auth::logout();
    $request->session()->invalidate();
    return redirect('/')->with(['loginstatus' => 'Logged Out']);
}

}




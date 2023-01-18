<?php

namespace App\Http\Controllers;
use App\Models\Campaign;
use App\Models\allProjects;
use App\Models\User;
use Hash, Auth;
use Illuminate\Http\Request;

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

    function allITG_UB_delivery(){
        $client= Campaign::where('project_name','ITG - UNIONBANK Delivery Lead Gerand Elinzano')->paginate(20); 
        return view('ITG-UNION BANK DELIVERY',['data'=>$client]);
    }

    function allITG_NTG_DCO_FW(){
        $client= Campaign::where('project_name','ITG - NTG (DCO-FW)')->paginate(5); 
        return view('ITG - NTG (DCO-FW)',['data'=>$client]);
    }

    function ITGUNIONBANKPROJECTALPHA(){
        $client= Campaign::where('project_name','ITG - UNIONBANK Project Alpha')->paginate(5); 
        return view('ITG-UNION BANK PROJECT ALPHA',['data'=>$client]);
    }

    function ITGNTGOSS(){
        $client= Campaign::where('project_name','ITG - NTG OSS')->paginate(5); 
        return view('ITG-NTG OSS',['data'=>$client]);
    }

    function ITGUNIONBANKTHEPORTAL(){
        $client= Campaign::where('project_name','ITG - UNIONBANK The Portal')->paginate(5); 
        return view('ITG-UNION BANK THE PORTAL',['data'=>$client]);
    }

    function ITGUNIONBANKCUSTOMERVERIFICATIONPLATFORM(){
        $client= Campaign::where('project_name','ITG - UNIONBANK Customer Verification Platform (CVP)')->paginate(5); 
        return view('ITG-UNION BANK CUSTOMER VERIFICATION PLATFORM',['data'=>$client]);
    }

    function ITGUNIONBANKDOLEPROJECTEONPROJECT(){
        $client= Campaign::where('project_name','ITG - UNIONBANK Dole Project & EON Project')->paginate(5); 
        return view('ITG-UNION BANK DOLE PROJECT & EON PROJECT',['data'=>$client]);
    }

    function ITGGLOBESTSAUTOMATION(){
        $client= Campaign::where('project_name','ITG - GLOBE STS AUTOMATION')->paginate(5); 
        return view('ITG-GLOBE STS AUTOMATION',['data'=>$client]);
    }

    function ITGSMDTASKAUTOMATION(){
        $client= Campaign::where('project_name','ITG - SMD TASK AUTOMATION')->paginate(5); 
        return view('ITG-SMD TASK AUTOMATION',['data'=>$client]);
    }

    function ITGEDOSM(){
        $client= Campaign::where('project_name','ITG - EDO SM')->paginate(5); 
        return view('ITG-EDO SM',['data'=>$client]);
    }

    function ITGUNIONBANKBAYANIHANBONDSPH(){
        $client= Campaign::where('project_name','ITG - UNIONBANK Bayanihan Bonds PH')->paginate(5); 
        return view('ITG-UNION BANK BAYANIHAN BONDS PH',['data'=>$client]);
    }

    function ITGOSSSERVICEFULFILLMENT(){
        $client= Campaign::where('project_name','ITG - OSS SERVICE FULFILLMENT')->paginate(5); 
        return view('ITG-OSS SERVICE FULFILLMENT',['data'=>$client]);
    }

    function ITGEITSCSD(){
        $client= Campaign::where('project_name','ITG - EITSC SD')->paginate(5); 
        return view('ITG-EITSC SD',['data'=>$client]);
    }

    function ITGAMICASSAITSUPPORT(){
        $client= Campaign::where('project_name','ITG - AMICASSA IT Support')->paginate(5); 
        return view('ITG-AMICASSA IT SUPPORT',['data'=>$client]);
    }

    function ITGEITSCSF(){
        $client= Campaign::where('project_name','ITG - EITSC SF')->paginate(5); 
        return view('ITG-EITSC SF',['data'=>$client]);
    }

    function ITGEIGQA(){
        $client= Campaign::where('project_name','ITG - EIG QA')->paginate(5); 
        return view('ITG-EIG QA',['data'=>$client]);
    }

    function ITGALPHAMAX(){
        $client= Campaign::where('project_name','ITG - ALPHAMAX')->paginate(5); 
        return view('ITG-ALPHAMAX',['data'=>$client]);
    }

    function ITGITNTG(){
        $client= Campaign::where('project_name','ITG - IT NTG')->paginate(5); 
        return view('ITG-IT NTG',['data'=>$client]);
    }

    function ITGEDOSIMP(){
        $client= Campaign::where('project_name','ITG - EDO SIMP')->paginate(5); 
        return view('ITG-EDO SIMP',['data'=>$client]);
    }

    function ITGLAS(){
        $client= Campaign::where('project_name','ITG - LAS')->paginate(5); 
        return view('ITG-LAS',['data'=>$client]);
    }

    function ITGLOTGGU(){
        $client= Campaign::where('project_name','ITG - LOTG GU')->paginate(5); 
        return view('ITG-LOTG GU',['data'=>$client]);
    }

    function ITGARES(){
        $client= Campaign::where('project_name','ITG - ARES')->paginate(5); 
        return view('ITG ARES',['data'=>$client]);
    }

    function ITGTECHM(){
        $client= Campaign::where('project_name','ITG - TECHM')->paginate(5); 
        return view('ITG-TECHM',['data'=>$client]);
    }


    function ITGGLOBESTSAUTOMOTION(){
        $client= Campaign::where('project_name','ITG-GLOBE STS AUTOMOTION')->paginate(5); 
        return view('ITG-GLOBE STS AUTOMOTION',['data'=>$client]);
    }

    function ITGPROJECTMANAGEMENTSERVICESGENERALTRIASCITADEL(){
        $client= Campaign::where('project_name','ITG - PROJECT MANAGEMENT SERVICES - GENERAL TRIAS/CITADEL')->paginate(5); 
        return view('ITG - PROJECT MANAGEMENT SERVICES - GENERAL TRIAS/CITADEL',['data'=>$client]);
    }

    function ITGPGPDDEVOPS(){
        $client= Campaign::where('project_name','ITG - PGPD DevOps')->paginate(5); 
        return view('ITG-PGPD DEVOPS',['data'=>$client]);
    }

    function ITGSDNNFV(){ 
        $client= Campaign::where('project_name','ITG - SDN NFV')->paginate(5); 
        return view('ITG-SDN NFV',['data'=>$client]);
    }

    function ITGPGPDENGSUPPORT(){
        $client= Campaign::where('project_name','ITG - PGPD ENG SUPPORT')->paginate(5); 
        return view('ITG - PGPD ENG SUPPORT',['data'=>$client]);
    }

    function ITGPGPDDASHANDPROGRAMGOVERNANCE(){
        $client= Campaign::where('project_name','ITG - PGPD DASH and PROGRAM GOVERNANCE')->paginate(5); 
        return view('ITG-PGPD DASH AND PROGRAM GOVERNANCE',['data'=>$client]);
    }

    function ITGPROGRAMGOVERNANCEANDITSUPPORT(){
        $client= Campaign::where('project_name','ITG - PROGRAM GOVERNANCE AND IT SUPPORT')->paginate(5); 
        return view('ITG-PROGRAM GOVERNANCE AND IT SUPPORT',['data'=>$client]);
    }

    function ITGSTRATANDCULTUREMANAGEMENT(){
        $client= Campaign::where('project_name','ITG - STRAT AND CULTURE MANAGEMENT')->paginate(5); 
        return view('ITG - STRAT AND CULTURE MANAGEMENT',['data'=>$client]);
    }

    function ITGDIGITALGROWTHMARKETING(){
        $client= Campaign::where('project_name','ITG - DIGITAL GROWTH MARKETING')->paginate(5); 
        return view('ITG - DIGITAL GROWTH MARKETING',['data'=>$client]);
    }

    function ITGOSSSFPMs(){
        $client= Campaign::where('project_name','ITG - OSS SF PMs')->paginate(5); 
        return view('ITG-OSS SF PMs',['data'=>$client]);
    }

    function ITGFA(){
        $client= Campaign::where('project_name','ITG - FA')->paginate(5); 
        return view('ITG-FA',['data'=>$client]);
    }

    function ITGEDODATASCIENCEDG(){
        $client= Campaign::where('project_name','ITG - EDO DATA SCIENCE - DG')->paginate(5); 
        return view('ITG-EDO DATA SCIENCE-DG',['data'=>$client]);
    }

    function ITGNPSANALYSISAUTOMATION(){
        $client= Campaign::where('project_name','ITG - NPS ANALYSIS AUTOMATION')->paginate(5); 
        return view('ITG NPS ANALYSIS AUTOMATION',['data'=>$client]);
    }

    function ITGITBARDEVICESSUPPORTOPERATIONSMS(){
        $client= Campaign::where('project_name','ITG - IT BAR DEVICES SUPPORT OPERATIONS MS')->paginate(5); 
        return view('ITG - IT BAR DEVICES SUPPORT OPERATIONS MS',['data'=>$client]);
    }

    function ITGGoCloudpresales(){
        $client= Campaign::where('project_name','ITG - GoCloud presales')->paginate(5); 
        return view('ITG - GoCloud presales',['data'=>$client]);
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
        if($request->campaign =="" || $request->leader =="" ||$request->positions ==""||$request->personnel =="")
        {
            return back()->with('status','Invalid empty fields.');
        }
        else{
            $user = allprojects::create($request->campaign,$request->leader,$request->positions,$request->personnel);
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
            $client = '1';
            $status = 'Active';
            $user = user::create($request->name,$request->email,$request->password,$client,$status);
            return back()->with('status','Account Created.');
            
        // }
    }   


    //adminlogin

    function adminLogin(Request $request){ 
 
        $credential=[
          'email' => $request->email,
          'password' => $request->password,
          'type' => $request->admin
        ];
        
        $users = user::where('email', $request->email)->get();
            
        foreach($users as $useq){
          if ($useq->status == "Deleted"){
            return back()->with('status',"Account has been deleted");
          }
    
          elseif($useq->type =="client"){
            return back()->with('status',"This email is not an admin account");
          }
          
        }
        $loginAttempt= Auth::attempt($credential);
        if( $loginAttempt){
          $request->session()->regenerate();
          $user = user::firstWhere('email', $request->email);
         session()->put('name', $user->name);
         session()->put('email', $user->email);
         session()->put('password', $user->password);
         session()->put('type', $user->type);
         session()->save();
        return redirect('/');
      }
    
      elseif($request->email == ""){
        return back()->with('status',"You need to input something");
      }
      else{
          return back()->with('status',"incorrect username or password");
      }
    }

    //userlogin
    function userLogin(Request $request){ 
 
        $credential=[
          'email' => $request->email,
          'password' => $request->password,
          'role_id' => $request->client
        ];
        
        $users = user::where('email', $request->email)->get();
            
        foreach($users as $useq){
          if ($useq->status == "Deleted"){
            return back()->with('status',"Account has been deleted");
          }
    
          elseif($useq->role_id =="2"){
            $client= allProjects::paginate(10);
            //return view('/userdashboard',['data'=>$client]);
            return view('userdashboard',['data'=>$client]);
          }
          elseif($useq->role_id =="1"){
            return view('/welcome');
          }
          
          
        }
        $loginAttempt= Auth::attempt($credential);
        if( $loginAttempt){
          $request->session()->regenerate();
          $user = user::firstWhere('email', $request->email);
         session()->put('name', $user->name);
         session()->put('email', $user->email);
         session()->put('password', $user->password);
         session()->put('type', $user->type);
         session()->save();
        return redirect('/userdashboard');
      }
    
      elseif($request->email == ""){
        return back()->with('status',"You need to input something");
      }
      else{
          return back()->with('status',"incorrect username or password");
      }
    }
}




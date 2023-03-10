<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\campaigncontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function () {
    return view('welcome');
});

Route::view('/absilogin', 'login');

Route::view('/profile', 'profile');

Route::get('/projects', function () {
    return view('projects');
});

Route::get('/adminaccounts', function () {
    return view('adminaccounts');
});
Route::get('/useraccounts', function () {
    return view('useraccounts');
});

/* User Routes */

Route::get('/userwelcome', function () {
    return view('userwelcome');
});

Route::get('/adminaccounts',[campaigncontroller::class , 'allAdmin']);

Route::get('/useraccounts',[campaigncontroller::class , 'allUser']);

Route::get('/userdashboard',[campaigncontroller::class , 'allProjectsUser']);

Route::get('/projects',[campaigncontroller::class , 'allProjectsUser']);

Route::get('/campaign',[campaigncontroller::class , 'allITG_UB_delivery']);

Route::get('/projects',[campaigncontroller::class , 'allProjects']);

/* CAMPAIGNS */

Route::get('/ITG - UNIONBANK Delivery Lead Gerand Elinzano',[campaigncontroller::class , 'allITG_UB_delivery']);

Route::get('/ITG - NTG (DCO-FW-NETWORK)',[campaigncontroller::class , 'allITG_NTG_DCO_FW']);

Route::get('/ITG - UNIONBANK Project Alpha',[campaigncontroller::class , 'ITGUNIONBANKPROJECTALPHA']);

Route::get('/ITG - NTG OSS',[campaigncontroller::class , 'ITGNTGOSS']);

Route::get('/ITG - UNIONBANK The Portal',[campaigncontroller::class , 'ITGUNIONBANKTHEPORTAL']);

Route::get('/ITG - UNIONBANK Customer Verification Platform (CVP)',[campaigncontroller::class , 'ITGUNIONBANKCUSTOMERVERIFICATIONPLATFORM']);

Route::get('/ITG - UNIONBANK Dole Project & EON Project',[campaigncontroller::class , 'ITGUNIONBANKDOLEPROJECTEONPROJECT']);

Route::get('/ITG-GLOBE STS AUTOMATION',[campaigncontroller::class , 'ITGGLOBESTSAUTOMATION']);

Route::get('/ITG - SMD TASK AUTOMATION',[campaigncontroller::class , 'ITGSMDTASKAUTOMATION']);

Route::get('/ITG - EDO SM',[campaigncontroller::class , 'ITGEDOSM']);

Route::get('/ITG - UNIONBANK Bayanihan Bonds PH',[campaigncontroller::class , 'ITGUNIONBANKBAYANIHANBONDSPH']);

Route::get('/ITG - OSS SERVICE FULFILLMENT',[campaigncontroller::class , 'ITGOSSSERVICEFULFILLMENT']);

Route::get('/ITG - EITSC SD ',[campaigncontroller::class , 'ITGEITSCSD']);

Route::get('/ITG - AMICASSA IT Support',[campaigncontroller::class , 'ITGAMICASSAITSUPPORT']);

Route::get('/ITG - EITSC SF ',[campaigncontroller::class , 'ITGEITSCSF']);

Route::get('/ITG - EIG QA',[campaigncontroller::class , 'ITGEIGQA']);

Route::get('/ITG - ALPHAMAX',[campaigncontroller::class , 'ITGALPHAMAX']);

Route::get('/ITG - IT NTG',[campaigncontroller::class , 'ITGITNTG']);

Route::get('/ITG - EDO SIMP',[campaigncontroller::class , 'ITGEDOSIMP']);

Route::get('/ITG - LAS',[campaigncontroller::class , 'ITGLAS']);

Route::get('/ITG-LOTG GU',[campaigncontroller::class , 'ITGLOTGGU']);

Route::get('/ITG - ARES',[campaigncontroller::class , 'ITGARES']);

Route::get('/ITG-TECHM',[campaigncontroller::class , 'ITGTECHM']);

Route::get('/ITG - ISDP',[campaigncontroller::class , 'ITGISDP']);

Route::get('/ITG - GLOBE STS AUTOMATION',[campaigncontroller::class , 'ITGGLOBESTSAUTOMOTION']);

Route::get('/ITG - PROJECT MANAGEMENT SERVICES-GENERAL TRIAS/CITADEL',[campaigncontroller::class , 'ITGPROJECTMANAGEMENTSERVICESGENERALTRIASCITADEL']);

Route::get('/ITG - PGPD DEVOPS',[campaigncontroller::class , 'ITGPGPDDEVOPS']);

Route::get('/ITG-SDN NFV',[campaigncontroller::class , 'ITGSDNNFV']);

Route::get('/ITG - PGPD ENG SUPPORT',[campaigncontroller::class , 'ITGPGPDENGSUPPORT']);

Route::get('/ITG - PGPD DASH AND PROGRAM GOVERNANCE',[campaigncontroller::class , 'ITGPGPDDASHANDPROGRAMGOVERNANCE']);

Route::get('/ITG - PROGRAM GOVERNANCE AND IT SUPPORT',[campaigncontroller::class , 'ITGPROGRAMGOVERNANCEANDITSUPPORT']);

Route::get('/ITG - STRAT AND CULTURE MANAGEMENT',[campaigncontroller::class , 'ITGSTRATANDCULTUREMANAGEMENT']);

Route::get('/ITG - DIGITAL GROWTH MARKETING',[campaigncontroller::class , 'ITGDIGITALGROWTHMARKETING']);

Route::get('/ITG - OSS SF PMs',[campaigncontroller::class , 'ITGOSSSFPMs']);

Route::get('/ITG-FA',[campaigncontroller::class , 'ITGFA']);

Route::get('/ITG-EDO DATA SCIENCE-DG',[campaigncontroller::class , 'ITGEDODATASCIENCEDG']);

Route::get('/ITG NPS ANALYSIS AUTOMATION',[campaigncontroller::class , 'ITGNPSANALYSISAUTOMATION']);

Route::get('/ITG - IT BAR DEVICES SUPPORT OPERATIONS MS',[campaigncontroller::class , 'ITGITBARDEVICESSUPPORTOPERATIONSMS']);

Route::get('ITG - GoCloud presales',[campaigncontroller::class , 'ITGGoCloudpresales']);
Route::get('/birthdays',[campaigncontroller::class , 'birthdays']);
Route::get('/users',[campaigncontroller::class , 'users']);

Route::get('/overtime', function () {
    return view('overtime');
});

Route::get('/month', function () {
    return view('month');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/coca', function () {
    return view('coca');
});



/* CRUD */

Route::post('/updateclient ', [campaigncontroller::class , 'updateClient']);

Route::post('/projects', [campaigncontroller::class , 'addcampaign']);

Route::post('/ITG-ALPHAMAX', [campaigncontroller::class , 'addemployee']);

Route::post('/deleteclient ', [campaigncontroller::class , 'deletecampaign']);

/*Second CRUD */
Route::post('/editEmployee ', [campaigncontroller::class , 'updateEmployee']);

//* Client Signup 

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/faq', function () {
    return view('faqs');
});
Route::get('/login', function () {
    return view('login');
});

Route::post('/signup', [campaigncontroller::class , 'signup']);
Route::post('/change', [campaigncontroller::class , 'changePass']);
Route::post('/adminsignup', [campaigncontroller::class , 'adminsignup']);
Route::post('/usersignup', [campaigncontroller::class , 'usersignup']);

Route::post('/login', [campaigncontroller::class , 'userLogin']);

//Logout
Route::get('/campaignall', [campaigncontroller::class , 'campaignAll']);

Route::get('/adminLogout', [campaigncontroller::class , 'getLogOut'])->name('adminlogout');




// Reroutes (For Admin)


Route::get('/', function () {
    return view('login');
});

Route::get('/welcome', function () {
    return view('welcome');
});


//User Routes

Route::get('/userprofile', function () {
    return view('userprofile');
});

//change


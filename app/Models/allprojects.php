<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class allprojects extends Model
{
    use HasFactory;

    public static function create($name_of_campaign,$team_leader,$total_number_of_positions,$number_of_personnel,$status){
        $campaign = new allprojects();
    
        $campaign->name_of_campaign=$name_of_campaign;
        $campaign->team_leader=$team_leader;    
        $campaign->total_number_of_positions=$total_number_of_positions; 
        $campaign->number_of_personnel=$number_of_personnel;
        $campaign->status=$status;
        $campaign->save();
    
        return $campaign;
    }

    public static function addemployee($name,$employee_number,$hire_date,$contact_number,$birthdate,$project_name,$designation,$tenure,$total_it_exp,$status){
        $campaign = new campaign();
    
        $campaign->name=$name;
        $campaign->employee_number=$employee_number;
        $campaign->hire_date=$hire_date;
        $campaign->contact_number=$contact_number;
        $campaign->birthdate=$birthdate;
        $campaign->project_name=$project_name;
        $campaign->tenure=$tenure;
        $campaign->total_it_exp=$total_it_exp;
        $campaign->status=$status;
        $campaign->save();
    
        return $campaign;
    }



}

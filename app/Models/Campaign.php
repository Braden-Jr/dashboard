<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Campaign extends Model
{

    use HasFactory;

    public static function create($name,$employee_number,$hire_date,$contact_number,$birthdate,$project_name,$designation,$tenure,$total_it_exp,$status){
        $campaign = new campaign();
    
        $campaign->name=$name;
        $campaign->employee_number=$employee_number;
        $campaign->hire_date=$hire_date;
        $campaign->contact_number=$contact_number;
        $campaign->birthdate=$birthdate;
        $campaign->project_name=$project_name;
        $campaign->designation=$designation;
        $campaign->tenure=$tenure;
        $campaign->total_it_exp=$total_it_exp;
        $campaign->status=$status;
        $campaign->save();
    
        return $campaign;
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class allprojects extends Model
{
    use HasFactory;

    public static function create($name_of_campaign,$team_leader,$total_number_of_positions,$number_of_personnel){
        $campaign = new allprojects();
    
        $campaign->name_of_campaign=$name_of_campaign;
        $campaign->team_leader=$team_leader;    
        $campaign->total_number_of_positions=$total_number_of_positions; 
        $campaign->number_of_personnel=$number_of_personnel;
        $campaign->save();
    
        return $campaign;
    }


}

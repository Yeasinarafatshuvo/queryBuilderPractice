<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InsertController extends Controller
{
    public function insertData()
    {
        $result = DB::table('students')->insert([
            'name'=>'Rupom',
            'class'=>'5',
            'roll'=>'4' 
        ]);

        if($result)
        {
            return "Insert Success";
        }
        else
        {
            return "Insert Fail";
        }
    }

    public function insertMultiRow()
    {
        $result = DB::table('students')->insert([
            [
                'name'=>'Sobuj',
                'class'=>'6',
                'roll'=>'25' 
            ],

            [
                'name'=>'Adil',
                'class'=>'7',
                'roll'=>'26' 
            ],

        ]);

        if($result)
        {
            return "Insert Success";
        }
        else
        {
            return "Insert Fail";
        }
    }


}

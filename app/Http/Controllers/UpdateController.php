<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UpdateController extends Controller
{
    public function updateData()
    {
        $result = DB::table('students')->where('id', '=', '5')
            ->update([
                'name' => 'shuvo',
                'class' => '8',
                'roll' => '40'
            ]);


            if($result)
            {
                return "Data update successfully";
            }



    }
}

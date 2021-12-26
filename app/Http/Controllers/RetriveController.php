<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class RetriveController extends Controller
{
    public function selectAllRows()
    {
        $result = DB::table('students')->get();
        return json_encode($result);
    }

    public function selectOneRows()
    {
        $result = DB::table('students')->where('name', '=', 'yeasin')->first();
        return json_encode($result);
    }

    public function findRows()
    {
        $result = DB::table('students')->find(3);
        return json_encode($result);
    }

    public function selectColumn()
    {
        $result = DB::table('students')->pluck('name');
        return json_encode($result);
    }

    public function selectMultiColumn()
    {
        $result = DB::table('students')->pluck('name', 'id');
        return json_encode($result);
    }

    public function selectSpeceficData()
    {
        $result = DB::table('students')->where('id', '=', '2')->value('name');
        return $result;
    }




    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeleteController extends Controller
{
    public function oneRowsDelete()
    {
        $delete = DB::table('students')->where('name', '=', 'shuvo')->delete();
        if($delete)
        {
            return "Delete Successful";
        }
    }

    public function allRows()
    {
        $delete = DB::table('students')->delete();
        if($delete)
        {
            return "Delete Successful";
        }
    }
}

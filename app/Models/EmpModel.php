<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class EmpModel extends Model
{
    use HasFactory;

    public static function employeeData($inputdata)
    {
        $data = DB::table('tbl_employees')->insertGetId($inputdata);
        return $data;
    }

    public static function getEmployee()
    {
        $limit = DB::table('tbl_employees')
                    ->select('first_name','last_name','comp_name','email','phone')
                    ->limit(10)
                    ->get();
        return $limit;
    }
}

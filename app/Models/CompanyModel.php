<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CompanyModel extends Model
{
    use HasFactory;

    public static function comapnyDetails($insertData)
    {
        $data = DB::table('tbl_companies')->insertGetId($insertData);
        return $data;
    }

    public static function getCompany()
    {
        $limit = DB::table('tbl_companies')
                    ->select('name','email','logo','website')
                    ->limit(10)
                    ->get();
        return $limit;
    }


}

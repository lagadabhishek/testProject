<?php

namespace App\Http\Services\Company;
use App\Models\CompanyModel;
use Illuminate\Support\Facades\Log;

class CompanyServices 
{

	public function comapnyDetails($payload)
    {   
        $insertData = array('name'      =>  $payload['name'],
                            'email'     =>  $payload['email'],
                            'logo'      =>  $payload['logo'],
                            'website'   =>  $payload['website']);

        return CompanyModel::comapnyDetails($insertData);
    }

    public function getCompany()
    {
        return CompanyModel::getCompany();
    }



}

 

   





<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\Company\CompanyServices; 
use App\Http\Services\Utility\ResponseUtility;
use Validator;

class CompanyController extends Controller
{
    public function comapnyDetails(Request $request)
    {
        $payload = $request->all();

        $nameRule = ['name' => 'required'];
        $email    = ['email' => 'required'];
        $logo     = ['logo' => 'required'];
        $website  = ['website' => 'required'];

        //name Validation..
        $nameValidation = Validator::make($request->all(), $nameRule);
        if($nameValidation->fails())
        {
            return ResponseUtility::respondWithError(4001, null);
        }

        //email Validation..
        $emailValidation = Validator::make($request->all(), $email);
        if($emailValidation->fails())
        {
            return ResponseUtility::respondWithError(4002, null);
        }

        //website Validation..
        $websiteValidation = Validator::make($request->all(), $website);
        if($websiteValidation->fails())
        {
            return ResponseUtility::respondWithError(4003, null);
        }

        $companyServices = new CompanyServices();
        
        $allData = $companyServices->comapnyDetails($payload);
        return ResponseUtility::respondWithSuccess(4502, $allData);
    }

    public function getCompany(Request $request)
    {
        $payload = $request->all();
        $companyServices = new CompanyServices();

        $data = $companyServices->getCompany();
        return $data;
    }
}

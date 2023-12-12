<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\Employee\EmpService; 
use App\Http\Services\Utility\ResponseUtility;
use Validator;

class EmpController extends Controller
{
    public function employeeData(Request $request)
    {
        $payload = $request->all();

        $fistNameRules  = ['first_name'  => 'required'];
        $lastNameRules  = ['last_name'   =>  'required'];
        $companyRules   = ['company' => 'required'];
        $emailRules     = ['email' => 'required'];
        $phoneRules     = ['phone' => 'required'];


        //firstName Validation..
        $firstNameValidation = Validator::make($request->all(), $fistNameRules);
        if($firstNameValidation->fails())
        {
            return ResponseUtility::respondWithError(4005, null);
        }

        //lastName Validation..
        $lastNameValidation = Validator::make($request->all(), $lastNameRules);
        if($lastNameValidation->fails())
        {
            return ResponseUtility::respondWithError(4006, null);
        }

        //companyName Validation..
        $lastNameValidation = Validator::make($request->all(), $companyRules);
        if($lastNameValidation->fails())
        {
            return ResponseUtility::respondWithError(4007, null);
        }

        //email Validation..
        $emailValidation = Validator::make($request->all(), $emailRules);
        if($emailValidation->fails())
        {
            return ResponseUtility::respondWithError(4002, null);
        }

        //phoneNumber Validation..
        $phoneNumberValidation = Validator::make($request->all(), $phoneRules);
        if($phoneNumberValidation->fails())
        {
            return ResponseUtility::respondWithError(4008, null);
        }

        $empService = new EmpService();

        $data = $empService->employeeData($payload);
        return ResponseUtility::respondWithSuccess(4501, $data);

    }

    public function getEmployee(Request $request)
    {
        $payload = $request->all();
        $empService = new EmpService();

        $data = $empService->getEmployee();
        return $data;
    }
}

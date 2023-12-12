<?php

namespace App\Http\Services\Employee;

use App\Models\EmpModel;
use Illuminate\Support\Facades\Log;

class EmpService 

{	
	
	public function employeeData($payload)
	{
		$inputdata = array(
						'first_name' 	=> $payload['first_name'],
						'last_name'  	=> $payload['last_name'],
						'comp_name' 	=> $payload['company'],
						'email'  		=> $payload['email'],
						'phone'  		=> $payload['phone']
						);
		return EmpModel::employeeData($inputdata);
	}

	public function getEmployee()
	{
        return EmpModel::getEmployee();
	}

	
}
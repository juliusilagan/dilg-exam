<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\personal_information;

class FormController extends Controller
{
    public function submit(Request $request)
    {
        $rules = [
            'firstName' => 'required',
            'middleName' => 'required',
            'lastName' => 'required',
            'age' => 'required|integer',
            'gender' => 'required|in:male,female',
            'streetName' => 'required',
            'barangay' => 'required',
            'municipalCity' => 'required',
            'province' => 'required',
            'postalCode' => 'required',
            'contactNumber' => 'required',
            'status' => 'required|in:Under Investigation,Surrendered,Apprehended,Escaped,Deceased',
        ];

        // Validate the form data
        $validatedData = $request->validate($rules);
        
        // Retrieve the form inputs
        $firstName = $request->input('firstName');
        $middleName = $request->input('middleName');
        $lastName = $request->input('lastName');
        $age = $validatedData['age'];
        $gender = $validatedData['gender'];
        $status = $validatedData['status'];

        // Concatenate the inputs to form the full name
        $fullName = $firstName . ' ' . $middleName . ' ' . $lastName;

        // Save the form data to the database
        $personalInformation = new personal_information();
        $personalInformation->fullname = $fullName;
        $personalInformation->age = $age;
        $personalInformation->gender = $gender;
        $personalInformation->status = $status;

        // Save the personal information to the database
        $personalInformation->save();

        return redirect()->back()->with('success', 'Successfully added');

    }
}

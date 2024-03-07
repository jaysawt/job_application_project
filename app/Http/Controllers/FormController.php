<?php

namespace App\Http\Controllers;

use App\Models\Test;
use App\Models\Applicant;
use App\Models\Education;
use App\Models\Employement;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\Console\Input\Input;

class FormController extends Controller
{
    public function store(Request $request){
        // print_r($request->all());

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users',
            'contact_number'=> 'required|string|max:15',
            'address'=> 'required|string|max:255',
            'education.*'=> 'required|string|max:255',
            'field_of_study.*'=> 'required|string|max:255',
            'percentage_obtained.*'=> 'required|numeric|min:0|max:100',
            'company_name.*'=> 'nullable|string|max:255',
            'interests'=> 'nullable|string|max:1000',
            'cv'=>'required|file|mimes:pdf,doc,docx|max:5048'

        ]);
        

        if ($validator->fails()) {
            return redirect('apply_for_job_role')
                        ->withErrors($validator)
                        ->withInput()
                        ->with('alert', 'There were some validation errors. Please check the form.');
        }
        
        $applicant = new Applicant;    
        $applicant->name = $request->input("name");
        $applicant->email = $request->input("email");
        $applicant->mobile_number = $request->input("contact_number");
        $applicant->address = $request->input("address");
        $applicant->motivation = $request->input("interests");

        // file storage
        $file = $request->file("cv");
        $destination = 'uploads';
        $file->move($destination, $file->getClientOriginalName());

        $applicant->cv_link = $destination . '/' . $file->getClientOriginalName();   
        $applicant->role = $request->input("selected_role");
        try {
            $applicant->save();
        } catch (QueryException $e) {
            return redirect('apply_for_job_role')
            ->with('alert', 'The email address has already applied for the job.');
        }
        

        $educations = [];
        foreach($request->education as $key=>$education){
            $educations[]=[
                'college_name' => $education,
                'field_of_study' => $request->field_of_study[$key],
                'percentage' => $request->percentage_obtained[$key],
                'applicant_id' => $applicant->id,
            ];
        }

        foreach ($educations as $educationData) {
            $education = new Education;
            $education->college_name = $educationData['college_name'];
            $education->field_of_study = $educationData['field_of_study'];
            $education->percentage = $educationData['percentage'];
            $education->applicant_id = $educationData['applicant_id'];
            $education->save();
        }

        $comapanies = [];
        foreach($request->company_name as $key=>$company){
            $comapanies[]=[
                'company_name' => $company,
                'years_of_experience' => $request->experience[$key],
                'applicant_id' => $applicant->id,
            ];
        }

        foreach ($comapanies as $companyData) {
            $employement = new Employement;
            $employement->company_name = $companyData["company_name"];
            $employement->years_of_experience = $companyData["years_of_experience"];
            $employement->applicant_id = $applicant->id;
            $employement->save();
        }

        //$testID = Test::where("role_id",$applicant->role)->first()->id;

        return redirect()->route('answer_test', ['id'=> $applicant->role, 'user_id'=>$applicant->id]);
        

    }

     
}

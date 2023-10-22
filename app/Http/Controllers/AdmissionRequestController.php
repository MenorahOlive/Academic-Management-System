<?php

namespace App\Http\Controllers;

use App\Http\Controllers\API\RegisterController;
use Illuminate\Http\Request;
use App\Models\AdmissionRequest;
use Illuminate\Support\Facades\Http;

class AdmissionRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return AdmissionRequest::query()->with(['course'])->get();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name'=> 'required',
            'last_name' => 'required',
            'course' => 'required',
            'email' => 'required'
        ]);
        return AdmissionRequest::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return AdmissionRequest::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ai = AdmissionRequest::find($id);
        $ai->update($request->all());
        return $ai;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return AdmissionRequest::destroy($id);
    }

    /**
     * Approve admission request.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function approve($id)
    {
        $ar= AdmissionRequest::find($id);
        $pass = "word";
        $reg = new Request([
        'name' => $ar->first_name,
        'email' => $ar->email,
        'password' => $pass,
        'c_password' => $pass]);
       
        
        $regCon = new RegisterController();
        $mailCon = new sendMailController();

        $mailCon->sendAcceptanceMail($ar->email,$ar->first_name,$pass);
        $regCon->register($reg);
        $this->destroy($id);

        return "Successful";


        
        } 
}

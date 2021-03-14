<?php

namespace App\Http\Controllers;

use App\ApplicationConsultation;
use Illuminate\Http\Request;

class ApplicationConsultationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      ApplicationConsultation::create([
          'client_name' => $request->get('client_name'),
          'client_phone' => $request->get('client_phone'),
          'client_email' => $request->get('client_email'),

          'user_type' => $request->get('user_type'),
          'service' => $request->get('service'),
          'comment' => $request->get('comment'),

      ]);
      // }

      return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ApplicationConsultation  $applicationConsultation
     * @return \Illuminate\Http\Response
     */
    public function show(ApplicationConsultation $applicationConsultation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ApplicationConsultation  $applicationConsultation
     * @return \Illuminate\Http\Response
     */
    public function edit(ApplicationConsultation $applicationConsultation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ApplicationConsultation  $applicationConsultation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ApplicationConsultation $applicationConsultation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ApplicationConsultation  $applicationConsultation
     * @return \Illuminate\Http\Response
     */
    public function destroy(ApplicationConsultation $applicationConsultation)
    {
        //
    }
}

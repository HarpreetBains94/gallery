<?php

namespace App\Http\Controllers;

use App\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function __construct(){
        $this->middleware('auth', ['except'=>['store']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($page_no)
    {
        $skip_no = 0;
        if(is_numeric($page_no)){
            $skip_no = ($page_no - 1) * 5;
        }
        $page_count = ceil((\DB::table('appointments')->get()->count())/5);
        $appointments = \DB::table('appointments')->orderBy('id', 'ASC')->orderBy('appointment_date', 'ASC')->skip($skip_no)->take(5)->get();
        return view('appointments.index', compact('appointments', 'page_no', 'page_count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return redirect('/');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',

        ]);

        $appointment = new Appointment;
        $appointment->name = $request->input('name');
        $appointment->email = $request->input('email');
        $appointment->art_id = $request->input('art_id');

        $appointment->save();

        return redirect()->back()->with('message', 'Appointment requested successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function show(Appointment $appointment)
    {
        return redirect('/');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit($appintment_id)
    {
        $appointment = Appointment::find($appintment_id);
        return view('appointments.edit', compact('appointment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appointment $appointment)
    {
        $this->validate($request, [
            'date' => 'required',

        ]);

        
        $appointment->appointment_date = $request->input('date');

        $appointment->save();

        return redirect()->back()->with('message', 'Appointment updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function destroy($appointment_id)
    {
        $appointment = Appointment::find($appointment_id);
        $appointment->delete();
        return redirect('/appointments/page=1');
    }
}

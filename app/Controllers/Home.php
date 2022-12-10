<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()

    {   $booking = new \App\Models\Booking();
        $data['users'] = $booking->getAll();

        //return view('date', $data);
        //return view('patient/about');
        return view('patient/index');
    }

    public function privacy()
    {
        return view('patient/privacy');
    }

    public function about()
    {
        return view('patient/about');
    }

    public function ddashboard()
    {
        return view('doctor/doctor-dashboard');
    }

}

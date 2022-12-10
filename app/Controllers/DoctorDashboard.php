<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Libraries\Hash;

class DoctorDashboard extends BaseController
{
    public function index()
    {
        $doctorModel = new \App\Models\UserData(); 
        return view('display');
    }

    public function patient()
    {     
        $request = service('request');
        $searchdata = $request->getGet();

        $search = "";
        if(isset($searchdata) && isset($searchdata['search']))
        {
            $search = $searchdata['search'];
        }

        $users = new \App\Models\UserData(); 

        if($search == ''){
            $paginateData = $users->paginate(5);
          }else{
            $paginateData = $users->select('*')
                ->orLike('name', $search)
                ->orLike('email', $search)
                ->orLike('created_at', $search)
                ->paginate(5);
        }  
        $data = [
            'users' => $paginateData,
            'pager' => $users->pager,
            'search' => $search
        ];

        return view('doctor/patient', $data);
    }

    public function appointment()
    {
        $booking = new \App\Models\Booking();
        $data['users'] = $booking->getAll();       
        return view('doctor/appointment', $data);
    }

    public function changestatus($id)
    {
        $booking = new \App\Models\Booking();
        $data = $booking->getby($id);
        $newStatus = ($data->status == 'PENDING') ? 'ACCEPTED' : 'PENDING';
        $option = [
            'status' => $newStatus,
        ];  
        $booking->update($id, $option);
        return redirect()->to('admin/appointment');
    }

    public function changedate($id)
    {
        $booking = new \App\Models\Booking();
        $data = $booking->getby($id);
        $status = [
            'datetime' => $this->request->getPost('datetime'),
        ];
        $booking->update($id, $status);
    }
}

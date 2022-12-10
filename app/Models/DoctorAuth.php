<?php

namespace App\Models;

use CodeIgniter\BaseModel;
use CodeIgniter\Model;

class DoctorAuth extends Model
{
    protected $table = 'doctor';
    protected $allowedFields = ['username', 'password'];
}

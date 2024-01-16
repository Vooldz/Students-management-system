<?php

namespace App\Http\Controllers\Api\V1\Students;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Api\V1\Students\GetStudentResource;

class ShowStudentController extends Controller
{
    public function show(Student $student)
    {
        return GetStudentResource::make($student);
    }
}

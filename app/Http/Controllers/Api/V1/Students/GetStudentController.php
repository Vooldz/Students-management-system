<?php

namespace App\Http\Controllers\Api\V1\Students;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Api\V1\Students\GetStudentResource;


class GetStudentController extends Controller
{
    public function index()
    {
        $students = Student::orderBy('attendance', 'desc')->get();

        return GetStudentResource::collection($students);
    }
}

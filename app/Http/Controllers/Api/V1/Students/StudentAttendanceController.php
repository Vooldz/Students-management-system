<?php

namespace App\Http\Controllers\Api\V1\Students;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Api\V1\Students\StudentAttendanceService;
use App\Http\Requests\Api\V1\Students\StudentAttendanceRequest;

class StudentAttendanceController extends Controller
{
    public $studentAttendance;

    public function __construct(StudentAttendanceService $studentAttendance)
    {
        $this->studentAttendance = $studentAttendance;
    }
    public function is_attendance(StudentAttendanceRequest $request)
    {
        $this->studentAttendance->studentAttendance($request);

        return response()->json(['success' => 'Students Has Been Checked Successfully'], 200);
    }
}

<?php

namespace App\Services\Api\V1\Students;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Http\UploadedFile;

class StudentAttendanceService
{
    public function studentAttendance(Request $request) 
    {
        // The request has two values [id and is-attendance]
        // Loop on the json code to be able to access id
        // Check if the student attendance
        // Increase the attendance if the student attendance

        $attendance_students = $request->all();
        foreach ($attendance_students as $attendance_student) {
            if ($attendance_student['is-attendance']) {
                $student = Student::find($attendance_student['id']);
                if ($student) {
                    $student->increment('attendance');
                }
            }
        }
    }
}

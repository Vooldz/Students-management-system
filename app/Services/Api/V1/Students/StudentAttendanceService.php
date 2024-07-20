<?php

namespace App\Services\Api\V1\Students;

use App\Models\Student;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class StudentAttendanceService
{
    public function studentAttendance(Request $request) 
    {
        // The request has two values [id and is-attendance]
        // Loop on the json code to be able to access id
        // Check if the student attendance
        // Increase the attendance if the student attendance

        $attendance_students = collect($request->all())->map(function($arr, $key) {
            return Arr::only($arr, ['id', 'is-attendance']);
        });
        $attendance_students->toArray();
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

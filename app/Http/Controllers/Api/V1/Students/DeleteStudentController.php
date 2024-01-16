<?php

namespace App\Http\Controllers\Api\V1\Students;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DeleteStudentController extends Controller
{
    public function destroy(Student $student)
    {
        $student->delete();

        return response()->json(['success' => 'Successfully Deleted!'], 200);
    }
}

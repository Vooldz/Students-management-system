<?php

namespace App\Http\Controllers\Api\V1\Students;

use App\Models\Student;
use Illuminate\Http\UploadedFile;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\Students\UpdateStudentRequest;
use App\Services\Api\V1\Students\UpdateStudentService;

class UpdateStudentController extends Controller
{
    public $updateStudentService;

    public function __construct(UpdateStudentService $updateStudentService)
    {
        $this->updateStudentService = $updateStudentService;
    }
    public function update(UpdateStudentRequest $request, Student $student){

        
        $this->updateStudentService->updateStudent($request, $student);

        return response()->json(['success' => 'Successfully Updated!'], 200);

    }
}

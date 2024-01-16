<?php

namespace App\Services\Api\V1\Students;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Http\UploadedFile;

class UpdateStudentService
{
    public function updateStudent(Request $request, Student $student) 
    {
        $validated = $request->validated();

        if ($request->image  && $request->image instanceof UploadedFile) {
            $image_extension = $request->image->getClientOriginalExtension();
            $image_name = time() . '.' . $image_extension;
            $request->image->move(public_path('images'), $image_name);
            $validated['image'] = $image_name;
        }

        $student->update($validated);

    }
}

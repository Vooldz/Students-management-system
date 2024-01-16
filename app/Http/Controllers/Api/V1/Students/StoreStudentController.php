<?php

namespace App\Http\Controllers\Api\V1\Students;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Api\V1\Students\StoreStudentService;
use App\Http\Requests\Api\V1\Students\StoreStudentRequest;

class StoreStudentController extends Controller
{
    public StoreStudentService $storeStudentService;
    
    public function __construct(StoreStudentService $storeStudentService){
        $this->storeStudentService = $storeStudentService;
    }
    
    public function store(StoreStudentRequest $request){

        $this->storeStudentService->createStudent($request);

        return response()->json(['success' => 'Successfully Created!'], 200);
    }
}

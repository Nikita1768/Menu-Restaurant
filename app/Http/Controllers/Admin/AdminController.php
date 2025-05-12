<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ChangeStatusRequest;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function changeStatus(ChangeStatusRequest $request)
    {

        $modelClass = "App\\Models\\$request->model";
        $model = $modelClass::where('id', $request->id)->first();
        $model->update(['show' => !$model->show]);
        return $request->all();
    }
}

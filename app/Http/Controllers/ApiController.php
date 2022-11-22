<?php

namespace App\Http\Controllers;

use http\Env\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    function getItems()
    {
        $data = DB::table('tasks')->get();

        return response()->json([
            'success' => true,
            'message' => 'success',
            'data' => json_encode($data)
        ]);
    }

    function getItem(\Illuminate\Http\Request $request)
    {
        $data = DB::table('tasks')->find($request->id);

        return response()->json([
            'success' => true,
            'message' => 'success',
            'data' => json_encode($data)
        ]);
    }

    function updateItems(\Illuminate\Http\Request $request)
    {
        DB::table('tasks')->where('id', $request->id)->update([
            'title' => $request->title,
            'description' => $request->description
        ]);

        return response()->json([
            'success' => true,
            'message' => 'updated successfully.',
            'data' => []
        ]);
    }
}

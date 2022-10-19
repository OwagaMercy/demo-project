<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Country;
use App\Models\Status;
use Illuminate\Support\Facades\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
        return view('project');
=======
        return Project::all();
>>>>>>> 9d702f0b52f87924c54d846dcc311a18ef24c54c
    }

    public function projectsByCountry(Request $request)
    {
        try {
            return response()->json([
                "projects" => Country::query()->where("name", $request->country_name)->firstOrFail()->projects
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                "message" => "Region Not Found"
            ], 404);
        }
    }

    public function projetsByStatus(Request $request)
    {
        try {
            return response()->json([
                "projects" => Project::query()->where("status_id", Status::query()->where("name", $request->status)->firstOrFail()->id)->get(),
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                "message" => "Region Not Found"
            ], 404);
        }
    }
    public function createProject(StoreProjectRequest $request){
        $payload = $request->all();
        $project = Project::create($payload);
        return response()->json([
            "success" => true,
            "status" => 0,
            "message" => "project added successfully",
            "data" => $project = Project::create($payload),
        ]);
    }

    
}



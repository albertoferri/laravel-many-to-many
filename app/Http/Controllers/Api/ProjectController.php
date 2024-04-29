<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        

        $projects = Project::all();

        // restituisco un oggetto php che verrà convertito in json
        // i dati utili delle api sono dentro le results
        return response()->json([
            "success" => true,
            "results" => $projects
        ]);
    }
}

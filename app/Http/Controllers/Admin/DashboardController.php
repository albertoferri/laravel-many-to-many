<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Project;

class DashboardController extends Controller
{
    public function index() {
        $projects = Project::all();
        return view('admin.index', compact('projects'));
    }

    public function users() {
        
        $user = Auth::user();
        return view('admin.users', compact('user'));
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Project;

use Illuminate\Http\Request;
use function Pest\Laravel\get;
use App\Http\Controllers\Controller;

class ProjectsController extends Controller
{
    public function index()
    {
        $users = User::with('projects')->get();
        return view('admin.index');
    }
}

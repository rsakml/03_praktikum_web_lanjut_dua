<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectDetailController extends Controller
{
    public function ProjectDetail(){
        return view('project-detail',['title'=> 'Project Detail']);
        }
}

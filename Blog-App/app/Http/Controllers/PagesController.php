<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about()
    {
        return view('pages.about');
    }

    public function services($service_id = null)
    {
        $data = array(
            'title' => 'Services',
            'services' => ['Web Development ', 'Programming', 'DEVOPS']
        );
        /*Passing in params with routing   
       echo "<h1>ID " . $service_id . "</h1>";
 */
        return view('pages.services')->with($data);
    }
}

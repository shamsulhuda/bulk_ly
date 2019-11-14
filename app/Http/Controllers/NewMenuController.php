<?php

namespace Bulkly\Http\Controllers;

use Bulkly\BufferPosting;
use Illuminate\Http\Request;

class NewMenuController extends Controller
{
    public function index(){
        $bufferposting = BufferPosting::paginate(5);

        return view('pages.newmenu', compact('bufferposting'));
    }
}

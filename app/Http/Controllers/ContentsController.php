<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;

class ContentsController extends Controller
{
  public function index()
  {
    $contents = Content::all();
    return view('contents.index', compact('contents'));
  }

  public function create()
  {
    return view('contents.create');
  }

  public function  store(Request $request)
  {

  }
}

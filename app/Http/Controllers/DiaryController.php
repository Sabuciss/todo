<?php

namespace App\Http\Controllers;
use App\Models\Diary;

class DiaryController extends Controller
{
    public function index()
    {
        $diaries = Diary::all();
        return view("diaries.index", compact("diaries"));
    }
} 
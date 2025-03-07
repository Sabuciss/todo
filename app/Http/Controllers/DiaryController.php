<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Diary;
use Illuminate\Validation\Rule;

class DiaryController extends Controller
{
    public function index()
    {
        $diary = Diary::all();
        return view("diary.index", compact("diary"));
    }
    public function show(Diary $diary) {
        return view("diary.show", compact("diary"));
    }
    public function create(){
        return view("diary.create");
    }
    public function store(Request $request){ 
        $validated = $request->validate([
        "title" => ["required", "max:255"],
        "body" => ["required", "max:255"],
        "date" => ["required", Rule::date()->format('Y-d-m')]
        ]);  

        Diary::create([
            "title" =>$validated["title"],
            "body" =>$validated["body"],
            "date" =>$validated["date"]
            ]);

            return redirect("/diaries");
            }

} 
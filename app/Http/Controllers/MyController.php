<?php

namespace App\Http\Controllers;
use App\Models\Subject;

class MyController extends Controller
{
    public function mainPage()
    {
        return view('subjects', ['subjects'=>Subject::all()]);
    }

    public function getSubjectInfoPage($subjectId)
    {
        $subject = Subject::find($subjectId);
        $books = $subject->books;
        $teachers = $subject->teachers;

        return view('subjectInfo', ['subject'=>$subject, 'books'=>$books, 'teachers'=>$teachers, "subjects"=>Subject::all()]);
    }
}

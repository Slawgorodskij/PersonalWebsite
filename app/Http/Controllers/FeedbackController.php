<?php

namespace App\Http\Controllers;

use App\Http\Requests\FeedbackFormRequest;
use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('feedback', [
            'title'=>'Обратная связь'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  FeedbackFormRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FeedbackFormRequest $request)
    {
        Feedback::create($request->validated());
        return to_route('feedback.index')->with('success', 'Сообщение отправлено');
    }

}

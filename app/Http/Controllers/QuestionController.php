<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\{RedirectResponse};

class QuestionController extends Controller
{
    public function store(): RedirectResponse
    {
        Question::create(
            request()->validate([
                'question' => ['required'],
            ])
        );

        return to_route('dashboard');
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;


class FaqController extends Controller
{
    function index()
    {
        $faqs = Faq::all();
        return view('faqs.index', compact('faqs'));
    }

    function create()
    {
        return view('faqs.create');
    }

    function store(Request $request)
    {
        $validated = $request->validate([
            'question' => 'required|string|min:10',
            'answer' => 'required|string|min:10',
            'link' => 'nullable',
        ]);

        // Create a new Faq model object, mass-assign its attributes with
        // the validated data and store it to the database
        $faq = Faq::create($validated);

        // Redirect to the blog index page
        return redirect()->route('faqs.index');
    }

    function show(Faq $faq)
    {
        return view('faqs.show', compact('faq'));
    }
}

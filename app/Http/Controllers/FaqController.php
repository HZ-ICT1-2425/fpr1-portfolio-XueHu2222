<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * display the list of faqs
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $faqs = Faq::all();
        return view('faqs.index', compact('faqs'));
    }

    /**
     * page for creating faq
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('faqs.create');
    }

    /**
     * store faq data
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
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

    /**
     * edit faq page
     * @param Faq $faq fetch faq
     * @return \Illuminate\Contracts\View\View
     */
    public function edit(Faq $faq)
    {
        return view('faqs.edit', compact('faq'));
    }

    /**
     * update data when save
     * @param Request $request get all faqs
     * @param Faq $faq fetch one faq
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Faq $faq)
    {
        $validated = $request->validate([
            'question' => 'required|string|min:10',
            'answer' => 'required|string|min:10',
            'link' => 'nullable',
        ]);
        $faq->update($validated);
        return redirect()->route('faqs.index');
    }

    /**
     * delete a faq
     * @param Faq $faq fetch one faq
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Faq $faq)
    {
        $faq->delete();
        return redirect()->route('faqs.index');
    }

    /**
     * display specific faq
     * @param Faq $faq one faq data
     * @return \Illuminate\Contracts\View\View
     */
    public function show(Faq $faq)
    {
        return view('faqs.show', compact('faq'));
    }
}

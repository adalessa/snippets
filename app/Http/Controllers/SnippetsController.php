<?php

namespace App\Http\Controllers;

use App\Snippet;

class SnippetsController extends Controller
{
    public function index()
    {
        $snippets = Snippet::latest()->get();
        return view('snippets.index', compact('snippets'));
    }

    public function show(Snippet $snippet)
    {
        return view('snippets.show', compact('snippet'));
    }

    public function create(Snippet $snippet)
    {
        return view('snippets.create', compact('snippet'));
    }

    public function store()
    {
        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required'
        ]);

        Snippet::create(request()->only(['title', 'body', 'forked_id']));

        return redirect()->home();
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\Tag\StoreRequest;
use App\Http\Requests\Tag\UpdateRequest;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::all();

        return view('tag.index', compact('tags'));
    }

    public function show(Tag $tag)
    {
        return view('tag.show', compact('tag'));
    }

    public function create()
    {
        return view('tag.create');
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        Tag::firstOrCreate($data);

        return redirect()->route('tags.index');
    }

    public function edit(Tag $tag)
    {
        return view('tag.edit', compact('tag'));
    }

    public function update(UpdateRequest $request, Tag $tag)
    {
        $data = $request->validated();
        $tag->update($data);

        return view('tag.show', compact('tag'));
    }

    public function destroy(Tag $tag)
    {
        $tag->delete();

        return redirect()->route('tags.index');
    }
}

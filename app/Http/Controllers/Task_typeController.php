<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task_type;

class Task_typeController extends Controller
{
    public function index()
    {
        return Task_type::all();
    }

    public function show(Article $article)
    {
        return $article;
    }

    public function store(Request $request)
    {
        $article = Task_type::create($request->all());

        return response()->json($article, 201);
    }

    public function update(Request $request, Article $article)
    {
        $article->update($request->all());

        return response()->json($article, 200);
    }

    public function delete(Article $article)
    {
        $article->delete();

        return response()->json(null, 204);
    }
}

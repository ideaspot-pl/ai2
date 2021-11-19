<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class EloquentController extends Controller
{
    public function gettingData()
    {
        $categories = Category::all();

        $funnyPosts = Post::where('category_id', 1) // no IDE-hinting
            ->orderBy('title')
            ->limit(1)
            ->get();

        $post1 = Post::find(1);

        $lastPost = Post::orderByDesc('id')->limit(1)->first();

        $notFirstPosts = Post::where('id', '>', 1)->get();

        return view('eloquent.getting_data', [
            'categories' => $categories,
            'funnyPosts' => $funnyPosts,
            'post1' => $post1,
            'lastPost' => $lastPost,
            'notFirstPosts' => $notFirstPosts,
        ]);
    }

    public function addCategory(Request $request)
    {
        if ($request->input('categoryName')) {
            $category = Category::create(['name' => $request->input('categoryName')]);
        }
        $categories = Category::all();
        return view('eloquent.add_category', [
            'categories' => $categories,
        ]);
    }

    public function deleteCategory(Request $request)
    {
        if ($request->input('categoryId')) {
            $category = Category::find($request->input('categoryId'));
            if ($category) {
                $category->delete();
            }
        }

        return redirect()->route('addCategory');
    }
}

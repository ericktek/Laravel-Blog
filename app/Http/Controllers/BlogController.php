<?php
namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {

        $posts = post::latest()->paginate(3);

        return view('welcome', compact('posts'))->with('i', (request()->input('page', 1) - 1) * 3);

    }

}

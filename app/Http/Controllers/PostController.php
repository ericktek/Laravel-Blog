<?php
namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {

        $posts = post::latest()->paginate(5);
        return view('posts.index', compact('posts'))->with('i', (request()->input('page', 1) - 1) * 5);

    }

    public function create()
    {

        return view('posts.create');
    }

    public function store(request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'photo' => 'required',
        ]);

        $input = $request->all();

        if ($photo = $request->file('photo')) {
            $destinationPath = 'storage/uploads/';
            $profilePhoto = date('YmdHis') . "." . $photo->getClientOriginalExtension();
            $photo->move($destinationPath, $profilePhoto);
            $input['photo'] = "$profilePhoto";
        }

        Post::create($input);

        return redirect()->route('posts.index')->with('success','Post has been created successfully.');
    }

    public function show(post $post)
    {

        return view('posts.show', compact('post'));
    }

    public function edit(post $post)
    {

        return view('posts.edit', compact('post'));
    }

    public function update(request $request, Post $post)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'photo' => 'required',
        ]);

        $input = $request->except('_method', '_token');

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = md5(time()).'.'.$extension;
            $file->move(public_path('storage/uploads/'), $filename);
            $input['photo'] = $filename;
        }else {
            unset($input['photo']);
        }

        $post->update($input);

        return redirect()->route('posts.index')->with('success','Post updated successfully.');
    }

    public function destroy(Post $post)
    {

        $post->delete();

        return redirect()->route('posts.index');
    }
}

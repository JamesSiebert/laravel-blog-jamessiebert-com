<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;


class PostsController extends Controller
{
    public function __construct()
    {
        // Methods that a user can access if they are not logged in
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        return view('blog.index')
            ->with('posts', Post::orderBy('updated_at', 'DESC')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:5048'
        ]);

        $newImageName = uniqid() . '_' . $request->title . $request->image->extension();

        $request->image->move(public_path('images'), $newImageName);

        Post::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'slug' => SlugService::createSlug(Post::class, 'slug', $request->title), //createSlug(model, column name, input)
            'image_path' => $newImageName,
            'user_id' => auth()->user()->id
        ]);

        return redirect('/blog')->with('message', 'Your post has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param string $slug
     * @return View
     */
    public function show(string $slug): View
    {
        return view('blog.show')->with('post', Post::where('slug', $slug)->first());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param string $slug
     * @return View
     */
    public function edit(string $slug): View
    {
        return view('blog.edit')
            ->with('post', Post::where('slug', $slug)->first());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param string $slug
     * @return RedirectResponse
     */
    public function update(Request $request, string $slug): RedirectResponse
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        Post::where('slug', $slug)
            ->update([
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'slug' => SlugService::createSlug(Post::class, 'slug', $request->title), //createSlug(model, column name, input)
                'user_id' => auth()->user()->id
            ]);

        return redirect('/blog')
            ->with('message', 'Your post has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param string $slug
     * @return RedirectResponse
     */
    public function destroy(string $slug): RedirectResponse
    {
        $post = Post::where('slug', $slug);
        $post->delete();

        return redirect('/blog')
            ->with('message', 'Your post has been deleted!');
    }
}

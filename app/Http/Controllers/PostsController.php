<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $posts = DB::table('posts')
            ->where('id_etat', '=', 3)
            ->get();
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $req_categories = DB::table('categories')->select('id', 'libelle_categorie')->get();
        $req_sous_categories = DB::table('sous_categories')->select('id', 'libelle_sous_categorie')->get();
        $categories = array();
        $sous_categories = array();
        foreach($req_categories as $categorie) {
            $categories[$categorie->id] = $categorie->libelle_categorie;
        }
        foreach($req_sous_categories as $categorie) {
            $sous_categories[$categorie->id] = $categorie->libelle_sous_categorie;
        }
        return view('posts.create', compact('categories', 'sous_categories'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        Post::create($request->all());
        $posts = Post::get();
        return view('posts.index', compact('posts'));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $req_etats = DB::table('etats')->select('id', 'libelle_etat')->get();
        $etats = array();
        foreach($req_etats as $etat) {
            $etats[$etat->id] = $etat->libelle_etat;
        }

        $post = Post::findOrFail($id);

        return view('posts.edit', compact('post', 'etats'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     *
     */
    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $post->update($request->all());
        return redirect(route('posts.edit', $id));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categorie::all();

        return view('pages.admin.index_c', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.create_c');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categorie = new Categorie();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('img/uploads/categorie/', $filename);
            $categorie->image = $filename;
        }

        $categorie->nom = $request->input('nom');
        $categorie->slug = $request->input('slug');
        $categorie->desc = $request->input('desc');
        $categorie->status = $request->input('status') == TRUE ? '1' : '0';
        $categorie->popular = $request->input('popular') == TRUE ? '1' : '0';
        $categorie->meta_title = $request->input('meta_title');
        $categorie->meta_desc = $request->input('meta_desc');
        $categorie->meta_keywords = $request->input('meta_keywords');

        $categorie->save();
        return redirect('create-categorie')->with('status', 'Catégorie ajouté avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categorie = Categorie::findOrFail($id);

        return view('pages.admin.edit_c', compact('categorie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $categorie = Categorie::findOrFail($id);

        if ($request->hasFile('image')) {

            $path = 'img/uploads/categorie/' . $categorie->image;

            if (File::exists($path)) {
                File::delete($path);
            }

            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('img/uploads/categorie/', $filename);
            $categorie->image = $filename;
        }

        $categorie->nom = $request->input('nom');
        $categorie->slug = $request->input('slug');
        $categorie->desc = $request->input('desc');
        $categorie->status = $request->input('status') == TRUE ? '1' : '0';
        $categorie->popular = $request->input('popular') == TRUE ? '1' : '0';
        $categorie->meta_title = $request->input('meta_title');
        $categorie->meta_desc = $request->input('meta_desc');
        $categorie->meta_keywords = $request->input('meta_keywords');

        $categorie->update();
        return redirect('categories')->with('status', 'Catégorie mis a jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categorie = Categorie::findOrFail($id);

        if ($categorie->image = !'default.jpg') {

            $path = 'img/uploads/categorie/' . $categorie->image;

            if (File::exists($path)) {
                File::delete($path);
            }
        }

        $categorie->delete();
        return redirect('categories')->with('status', 'Catégorie supprimé avec succès');
    }
}

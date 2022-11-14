<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Produit;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produits = Produit::all();

        return view('pages.admin.index_p', compact('produits'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categorie::all();

        return view('pages.admin.create_p', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produit = new Produit();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('img/uploads/produit/', $filename);
            $produit->image = $filename;
        }

        $produit->cate_id = $request->input('cate_id');
        $produit->nom = $request->input('nom');
        $produit->slug = $request->input('slug');
        $produit->small_desc = $request->input('small_desc');
        $produit->desc = $request->input('desc');
        $produit->prix_o = $request->input('prix_o');
        $produit->prix_v = $request->input('prix_v');
        $produit->qte = $request->input('qte');
        $produit->taxe = $request->input('taxe');
        $produit->status = $request->input('status') == TRUE ? '1' : '0';
        $produit->trending = $request->input('popular') == TRUE ? '1' : '0';
        $produit->meta_title = $request->input('meta_title');
        $produit->meta_desc = $request->input('meta_desc');
        $produit->meta_keywords = $request->input('meta_keywords');

        $produit->save();

        return redirect('create-produit')->with('status', 'Produit ajouté avec succès');
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
        $categories = Categorie::all();
        $produit = Produit::findOrFail($id);

        return view('pages.admin.edit_p', compact('categories', 'produit'));
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
        $produit = Produit::findOrFail($id);

        if ($request->hasFile('image')) {

            $path = 'img/uploads/produit/' . $produit->image;

            if (File::exists($path)) {
                File::delete($path);
            }

            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('img/uploads/produit/', $filename);
            $produit->image = $filename;
        }

        $produit->cate_id = $request->input('cate_id');
        $produit->nom = $request->input('nom');
        $produit->slug = $request->input('slug');
        $produit->small_desc = $request->input('small_desc');
        $produit->desc = $request->input('desc');
        $produit->prix_o = $request->input('prix_o');
        $produit->prix_v = $request->input('prix_v');
        $produit->qte = $request->input('qte');
        $produit->taxe = $request->input('taxe');
        $produit->status = $request->input('status') == TRUE ? '1' : '0';
        $produit->trending = $request->input('trending') == TRUE ? '1' : '0';
        $produit->meta_title = $request->input('meta_title');
        $produit->meta_desc = $request->input('meta_desc');
        $produit->meta_keywords = $request->input('meta_keywords');

        $produit->update();
        return redirect('produits')->with('status', 'Produit mis a jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produit = Produit::findOrFail($id);

        if ($produit->image = !'default.jpg') {

            $path = 'img/uploads/produit/' . $produit->image;

            if (File::exists($path)) {
                File::delete($path);
            }
        }

        $produit->delete();
        return redirect('produits')->with('status', 'Produit supprimé avec succès');
    }
}

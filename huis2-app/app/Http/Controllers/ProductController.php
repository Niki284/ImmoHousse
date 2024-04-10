<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $productHuis = Product::all();
        
        return view('product.index', ['productHuis' => $productHuis]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('product.create', ['voorziningen' => DB::table('woning_types')->get()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request , $id = null)
    {
        //

        // $request->validate([
        //     'title' => 'required',
        //     'subtitle' => 'required',
        //     'price' => 'required',
        //     'description' => 'required',
        //     'size' => 'required',
        //     'image' => 'required|image'
        // ]);

        $productHuis = new Product();
        $productHuis->title = $request->title;
        $productHuis->subtitle = $request->subtitle;
        $productHuis->price = $request->price;
        $productHuis->description= $request->description;
        $productHuis->size = $request->size;
        $productHuis->city = $request->city;
        $productHuis->address = $request->address;
        $productHuis->rooms = $request->rooms;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $productHuis->image = Storage::url($imagePath);
        }

        $productHuis->save();
        return redirect()->route('product.index')->with('success', 'Product is toegevoegd');
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
        $productHuis = Product::find($id);
        return view('product.show', ['productHuis' => $productHuis]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        return view('product.edit', ['productHuis' => Product::find($id)]);
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
        //
        $productHuis = Product::find($id);
        $productHuis->title = $request->title;
        $productHuis->subtitle = $request->subtitle;
        $productHuis->price = $request->price;
        $productHuis->description= $request->description;
        $productHuis->size = $request->size;
        $productHuis->city = $request->city;
        $productHuis->address = $request->address;
        $productHuis->rooms = $request->rooms;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $productHuis->image = Storage::url($imagePath);
        }
        $productHuis->save();
        return redirect()->route('product.show', ['product' => $productHuis->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $productHuis = Product::find($id);
        $productHuis->delete();
        return redirect()->route('product.index');
    }
}

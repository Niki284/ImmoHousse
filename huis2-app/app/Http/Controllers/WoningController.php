<?php

namespace App\Http\Controllers;

use App\Models\Technisch;
use App\Models\Woning;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WoningController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $woningHuis = Woning::all();
        return view('woning.index', ['woningHuis' => $woningHuis]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('woning.create', ['woningHuis' => Woning::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request , $id = null)
    {
        // $request->validate([
        //     'title' => 'required',
        //     'subtitle' => 'required',
        //     'price' => 'required',
        //     'description' => 'required',
        //     'size' => 'required',
        //     'image' => 'required|image'
        // ]);
      

        $woningHuis = new Woning();
        $woningHuis->title = $request->title;
        $woningHuis->subtitle = $request->subtitle;
        $woningHuis->price = $request->price;
        $woningHuis->description= $request->description;
        $woningHuis->city = $request->city;
        $woningHuis->address = $request->address;
        $woningHuis->rooms = $request->rooms;
        $woningHuis->size = $request->size;
        if($request->hasFile('image')){
            $imagePath = $request->file('image')->store('images', 'public');
            $woningHuis->image = Storage::url($imagePath);
        }

        $woningHuis->save();
        return redirect()->route('woning.index')->with('success', 'Woning is toegevoegd');


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
        $woningHuis = Woning::find($id);
 
        
        // $technisches = $woningHuis->technisches;
        // $technisches= Technisch::all();
        // $woningHuis = Woning::with('technisches')->find($id);
        return view('woning.show', ['woningHuis' => $woningHuis]);
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
        $woningHuis = Woning::find($id);
        return view('woning.edit', ['woningHuis' => $woningHuis]);
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
        $woningHuis = Woning::find($id);
        $woningHuis->title = $request->title;
        $woningHuis->subtitle = $request->subtitle;
        $woningHuis->price = $request->price;
        $woningHuis->description= $request->description;
        $woningHuis->city = $request->city;
        $woningHuis->address = $request->address;
        $woningHuis->rooms = $request->rooms;
        $woningHuis->size = $request->size;

        if($request->hasFile('image')){
            $imagePath = $request->file('image')->store('images', 'public');
            $woningHuis->image = Storage::url($imagePath);
        }

        $woningHuis->save();
        return redirect()->route('woning.index')->with('success', 'Woning is aangepast');
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
        Woning::destroy($id);
        return redirect()->route('woning.index')->with('success', 'Woning is verwijderd');
    }
}

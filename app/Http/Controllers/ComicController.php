<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * 
     */
    public function index(Request $request)
    {

        if (!empty($request->query('search'))) {
            $type = $request->query('search');
            $comics = Comic::where('type', $type)->get();
        } else {
            $comics = Comic::all();
        }


        return view("comics.index", compact("comics"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * 
     */
    public function create()
    {
        return view("comics.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * 
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|max:100|min:3',
            'description' => 'nullable',
            'thumb' => 'required|',
            'price' => 'required',
            'series' => 'required',
            'sale_date' => 'required|min:5',
            'type' => 'required',
        ]);




        $form_data = $request->all();
        // $new_comic = new Comic();
        // $new_comic->fill($form_data);

        // $new_comic->title = $form_data["title"];
        // $new_comic->description = $form_data["description"];
        // $new_comic->thumb = $form_data["image"];
        // $new_comic->price = $form_data["price"];
        // $new_comic->series = $form_data["series"];
        // $new_comic->sale_date = $form_data["sale_date"];
        // $new_comic->type = $form_data["type"];

        // $new_comic->save();
        $new_comic = Comic::create($form_data);
        return redirect()->route("comics.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * 
     */
    public function show(Comic $comic)
    {

        return view("comics.show", compact("comic"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * 
     */
    public function edit(Comic $comic)
    {
       return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * 
     */
    public function update(Request $request, Comic $comic)
    {
        $form_data = $request->all();
        $comic->title = $form_data["title"];
        $comic->description = $form_data["description"];
        $comic->thumb = $form_data["thumb"];
        $comic->price = $form_data["price"];
        $comic->series = $form_data["series"];
        $comic->sale_date = $form_data["sale_date"];
        $comic->type = $form_data["type"];
        $comic->update();
        return redirect()->route("comics.show", $comic->id);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * 
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route("comics.index")->with('message', "La card $comic->title è stata eliminata");
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TravelPackageRequest;
use App\TravelPackage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TravelPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = TravelPackage::paginate();
        return view('pages.admin.travel-package.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items = TravelPackage::paginate(10);
        $category = Category::all();
        return view('pages.admin.travel-package.create', compact('items', 'category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TravelPackageRequest $request)
    {
        // $data = $request->all();
        // $data['location_category_id'] = $request->location_category_id;
        // $data['slug'] = Str::slug($request->title);

        $data = TravelPackage::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'location_category_id' => $request->location_category_id,
            'about' => $request->about,
            'featured_event' => $request->featured_event,
            'language' => $request->language,
            'foods' => $request->foods,
            'depatured_date' => $request->depatured_date,
            'duration' => $request->duration,
            'type' => $request->type,
            'price' => $request->price
        ]);

        // TravelPackage::create($data);
        return redirect()->route('travel-package.index');
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
        $item = TravelPackage::FindOrFail($id);
        $category = Category::all();
        // dd($item);
        return view('pages.admin.travel-package.edit', compact('item', 'category'));
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
        $request->validate([
            'title' => 'required',
            'location_category_id' => 'required',
            'about' => 'required',
            'featured_event' => 'required',
            'language' => 'required',
            'foods' => 'required',
            'depatured_date' => 'required',
            'duration' => 'required',
            'type' => 'required',
            'price' => 'required'
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        $item = TravelPackage::FindOrFail($id);
        $item->update($data);

        return redirect()->route('travel-package.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = TravelPackage::findOrFail($id);
        $item->delete();

        return redirect()->route('travel-package.index');
    }
}

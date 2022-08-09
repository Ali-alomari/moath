<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Http\Requests\StorecategoryRequest;
use App\Http\Requests\UpdatecategoryRequest;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category =category::all();
        return view('layouts.category.category',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.category.newCategory');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorecategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorecategoryRequest $request)
    {
        try{
            $newCategory=[
                'name'=>['ar'=> $request->nameAR ,'en'=>$request->nameEN],
                'description'=>['ar'=>$request->descriptionAR ,'en'=>$request->descriptionEN],

            ];
            category::create($newCategory);
            return Redirect::route('category.index');



        } catch(\Exception $err){


        }


        }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecategoryRequest  $request
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatecategoryRequest $request, category $category)
    {
        return $category;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(category $category)
    {
        try {
            category::where('id', $category->id)->delete();
            return redirect()->route('category.index');
        } catch (\Throwable $th) {
            redirect()->route('category.index');
        }
    }
}

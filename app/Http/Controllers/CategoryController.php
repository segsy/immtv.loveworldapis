<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;



class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::latest()->paginate(5);
        return view ('category', compact('categories'))
            ->with('i',(request()->input('page',1)-1) * 5);




        return view('category', compact('category'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('category');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'       => 'required',
            'description' => 'required',
            //'thumbnail'   =>  ['required', 'image', 'mimes', 'Jpeg','png','gif','jpg','svg','max:2048']





        ]);
        //dd('I got here');

       //Working script for the future. don't delete delete
       /* $image = $request->file('thumbnail');
        $imageName = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('storage/uploads'), $imageName);*/

        $category = new Category();
        $category->title = $request->input('title');
        $category->description = $request->input('description');
        $category->status = $request->input('status');
        $category->position = $request->input('position');
        //$category->thumbnail = $imageName;

        if($request->hasfile('thumbnail')){
            $file = $request->file('thumbnail');
            $extension = $file->getClientOriginalExtension(); // getting image thumbnail extension
            $filename = time(). '.' . $extension;
            $file->move('uploads/category/', $filename);
            $category->thumbnail = $filename;
        } else {
            //return $request;

            $category->thumbnail = '';
        }




        $category->save();

        return redirect()->back()->with('success', 'Category has been successfully added ');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categories = Category::findorFail($id);
        return view('category',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        dd($category);
        return view('edit_category')->with('category');

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
            'title'       => 'required',
            'description' => 'required'


        ]);

       /* $image = $request->file('thumbnail');
        $imageName = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('storage/uploads'), $imageName);*/


        $category = Category::find($id);

        $category->title = $request->input('title');
        $category->description = $request->input('description');
        $category->status = $request->input('status');
        $category->position = $request->input('position');
        //$category->thumbnail = $imageName;
         if($request->hasfile('thumbnail')){
           $file = $request->file('thumbnail');
           $extension = $file->getClientOriginalExtension(); // getting image thumbnail extension
           $filename = time(). '.' . $extension;
           $file->move('uploads/category/', $filename);
           $category->thumbnail = $filename;
       } else {
           //return $request;

           $category->thumbnail = '';
       }

        $category->save();

        return redirect('/category')->with('success', 'Category have been successfully updated ');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $category = Category::find($id);
            //dd($category);
        $category->delete();
        return redirect('/category')->with('success', 'Category have been deleted ');
    }
}

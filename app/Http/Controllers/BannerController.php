<?php

namespace App\Http\Controllers;

use App\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        //$banner = Banner::all();


        $banner = Banner::latest()->paginate(5);

        return view ('banner', compact('banner'))
            ->with('i',(request()->input('page',1)-1) * 5);

        /*if($request->has('bannerType')){
            $banner = Banner::where('id',$request->bannerType)->orderBy('id', 'desc');
        }*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addbanner(Request $request)
    {
        $request->validate([

            'contentName'  => 'required',
            'contentID' => 'required'
            //'filename' =>  'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);

        /*$image = $request->file('thumbnail');

       $new_name = rand() . '.' . $image->getClientOriginalExtension();
       $image->move(public_path('images'), $new_name);*/

        /*$image = $request->file('filename');
        $imageName = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('storage/uploads'), $imageName);*/

        $banner = new Banner();
        $banner->contentName = $request->input('contentName');
        $banner->contentID = $request->input('contentID');
        $banner->url = $request->input('url');
        $banner->bannerType = $request->input('bannerType');
        $banner->active = $request->input('active');
        $banner->position = $request->input('position');
        $banner->isLive = $request->input('isLive');
        //$banner->filename = $imageName;


        if($request->hasfile('filename')){
            $file = $request->file('filename');
            $extension = $file->getClientOriginalExtension(); // getting image thumbnail extension
            $filename = time(). '.' . $extension;
            $file->move('uploads/banners/', $filename);
            $banner->filename = $filename;
        } else {
            //return $request;

            $banner->filename = '';

        }
        //dd($banner);


        $banner->save();

        return redirect()->back()->with('success', 'Banner has been successfully added');





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
    public function editbanner($id)
    {
        $banners = Banner::find($id);
        return view('edit_banner', compact('banners'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatebanner(Request $request, $id)
    {
        /*$request->validate([

            'contentName'  => 'required',
            'contentID' => 'required'
            //'filename' =>  'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);*/


        /* $image = $request->file('filename');
         $imageName = rand() . '.' . $image->getClientOriginalExtension();
         $image->move(public_path('storage/uploads'), $imageName);*/

        $banner = Banner::find($id);
        $banner->contentName = $request->input('contentName');
        $banner->contentID = $request->input('contentID');
        $banner->url = $request->input('url');
        $banner->bannerType = $request->input('bannerType');
        $banner->active = $request->input('active');
        $banner->position = $request->input('position');
        $banner->isLive = $request->input('isLive');
        //$banner->filename = $imageName;

      if($request->hasfile('filename')){
            $file = $request->file('filename');
            $extension = $file->getClientOriginalExtension(); // getting image thumbnail extension
            $filename = time(). '.' . $extension;
            $file->move('uploads/banners/', $filename);
            $banner->filename = $filename;
        } else {
            //return $request;


            $banner->filename = '';
          //dd($banner);
        }


        $banner->save();

        return redirect('/banner')->with('success', 'Banner has been successfully updated');

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banner = Banner::find($id);
        //dd($category);
        $banner->delete();
        return redirect('/banner')->with('success', 'Category have been deleted ');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use App\Channels;
use Carbon\Carbon as Time;
use DB;

class VideoController extends Controller
{

    public function index(Request $request){

        //view
        $video = Video::latest()->paginate(5);
        //dd($videos);
        return view ('video',  compact('video'))
        ->with('i',(request()->input('page',1)-1) * 5);
/*
    if(isset($channel)) {
    //$channel = DB::latest('*');
    $channel = DB::table('channels')
        ->select('channel')
        ->groupBy('channel')
        ->orderBy('channel', 'ASC')
        ->get();
       // $channel = DB::table('channels')->lists('id','channel');
    dd($channel);*/
       /* if($request->has('channel')){
               $banner = Channels::where('id',$request->channel)->orderBy('id', 'desc');
           }*/
        //$channels = Channels::all();
        return view ('video', compact('channels'));


    //return view('video', [ 'channel' => $channel ]);





    }


    public function uploadvideos(Request $request){
        //upload videos

      /*  $request->validate([
            'Videos_title'       => 'required',
            'description' => 'required'


        ]);*/

      /*  $image = $request->file('thumbnail');
        $imageName = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('storage/uploads'), $imageName);*/

        $video = new Video();
        //$current_timestamp = Carbon::now()->timestamp; // Produces something like 1552296328
        $now = Time::now()->timestamp;


        $video->videos_title = $request->input('Videos_title');
        $video->uploadtime = $request->input('uploadtime');
        $video->ios_url = $request->input('ios_url');
        $video->windowsurl = $request->input('windowsurl');
        $video->rawUrl = $request->input('rawUrl');
        $video->channel_id = $request->input('channel');
        $video->description = $request->input('description');
        $video->recommended = $request->input('recommended');
        $video->active = $request->input('active');
        $video->isLive = $request->input('isLive');
        $video->position = $request->input('position');
        $video->hideFrom = $request->input('hideFrom');
        $video->isDownloadable = $request->input('isDownloadable');
        $video->email = $request->input('email');
        $video->isPublic = $request->input('isPublic');
        //$video->thumbnail = $imageName;
        if($request->hasfile('filename')){
            $file = $request->file('filename');
            $extension = $file->getClientOriginalExtension(); // getting image thumbnail extension
            $filename = time(). '.' . $extension;
            $file->move('uploads/video/', $filename);
            $video->filename = $filename;
        } else {
            //return $request;


            $video->filename = '';
            //dd($banner);
        }

        $video->save();

        return redirect()->back()->with('success', 'Video have been uploaded Successfully');


    }

    public function edit($id){

        $videos = Video::find($id);

        return view('edit_video', compact('videos'));


    }

    public function update(Request $request, $id){



        $video = Video::find($id);
        //$current_timestamp = Carbon::now()->timestamp; // Produces something like 1552296328

        $video->Videos_title = $request->input('Videos_title');
        $video->uploadtime = $request->input('uploadtime');
        $video->ios_url = $request->input('ios_url');
        $video->windowsurl = $request->input('windowsurl');
        $video->rawUrl = $request->input('rawUrl');
        $video->channel_id = $request->input('channel');
        $video->description = $request->input('description');
        $video->recommended = $request->input('recommended');
        $video->active = $request->input('active');
        $video->isLive = $request->input('isLive');
        $video->position = $request->input('position');
        $video->hideFrom = $request->input('hideFrom');
        $video->isDownloadable = $request->input('isDownloadable');
        $video->email = $request->input('email');
        $video->isPublic = $request->input('isPublic');
        //$video->thumbnail = $imageName;
        if($request->hasfile('filename')){
            $file = $request->file('filename');
            $extension = $file->getClientOriginalExtension(); // getting image thumbnail extension
            $filename = time(). '.' . $extension;
            $file->move('uploads/video/', $filename);
            $video->filename = $filename;
        } else {
            //return $request;

            $video->filename = '';
        }


        $video->save();

        return view('/video')->with('success', 'Video have been Successfully Updated');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $videos = Video::findorFail($id);
        return view('video',compact('videos'));
    }


    public function delete($id)
    {
        $video = Video::find($id);
        //dd($category);
        $video->delete();
        return redirect('/video')->with('success', 'Video content have been deleted ');
    }








}

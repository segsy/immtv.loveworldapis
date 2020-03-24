<?php

namespace App\Http\Controllers;
use App\WatchLive;

use Illuminate\Http\Request;

class WatchliveController extends Controller
{
  public function index(){
      $watchlive = WatchLive::all();
      return view('watchlive', compact('watchlive'));
  }
  public function addevent(Request $request){
      $request->validate([

          'streamID'       => 'required',
          'eventName' => 'required',

      ]);
      $watchlive = new WatchLive();
      $watchlive->streamID = $request->input('streamID');
      $watchlive->eventName = $request->input('eventName');
      $watchlive->eventID   = $request->input('eventID');
      $watchlive->description = $request->input('description');
      $watchlive->stream_url = $request->input('stream_url');
      $watchlive->status = $request->input('status');
      $watchlive->streamerURL = $request->input('streamerURL');
      $watchlive->bbURL = $request->input('bbURL');
      $watchlive->token = $request->input('token');

      $watchlive->save();

      return redirect()->back()->with('success', 'Live Event has been added successfully ');




  }

  public function editwatchive($id){
      $watchlive = WatchLive::find($id);
      return view('edit_watchlive',compact('watchlive'));
  }
   public function updatewatchlive(Request $request, $id){




       $request->validate([

           'streamID'       => 'required',
           'eventName' => 'required',

       ]);
       $watchlive = WatchLive::find($id);
       $watchlive->streamID = $request->input('streamID');
       $watchlive->eventName = $request->input('eventName');
       $watchlive->eventID   = $request->input('eventID');
       $watchlive->description = $request->input('description');
       $watchlive->stream_url = $request->input('stream_url');
       $watchlive->status = $request->input('status');
       $watchlive->streamerURL = $request->input('streamerURL');
       $watchlive->bbURL = $request->input('bbURL');
       $watchlive->token = $request->input('token');

       $watchlive->save();

       return redirect('watchlive')->with('success', 'Live Event has been updated successfully ');


   }

    public function delete($id)
    {
        $watchlive = WatchLive::find($id);
        //dd($category);
        $watchlive->delete();
        return redirect('/watchlive')->with('success', 'Watchlive have been deleted ');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use DB;

use App\Channels;



class ChannelController extends Controller
{
    public function index(){

        $channel = Channels::latest()->paginate(5);
        return view ('channel', compact('channel'))
            ->with('i',(request()->input('page',1)-1) * 5);
        return view ('channel', compact('channel'));





        /* if(request()->ajax())
         {
             if(!empty($request->channel))
             {
                 $data = DB::table('channels')
                     ->select('id','description', 'url', 'featured', 'active', 'position', 'hidden','channelType','userID')
                     ->where('description', $request->filter_gender)
                     ->where('channel', $request->filter_country)
                     ->get();
             }
             else
             {
                 $data = DB::table('channels')
                     ->select('id','description', 'url', 'featured', 'active', 'position', 'hidden','channelType','userID')
                     ->get();
             }
             return datatables()->of($data)->make(true);
         }
         $channel = DB::table('channels')
             ->select('channel')
             ->groupBy('channel')
             ->orderBy('channel', 'ASC')
             ->get();
 */


    }
    public function addchannel(Request $request){

        $request->validate([

            'channel'  => 'required',
            'category' => 'required'
            //'filename' =>  'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);

        /*$image = $request->file('thumbnail');

       $new_name = rand() . '.' . $image->getClientOriginalExtension();
       $image->move(public_path('images'), $new_name);*/

       /* $image = $request->file('filename');
        $imageName = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('storage/uploads'), $imageName);*/

        $channel = new Channels();
        $channel->channel = $request->input('channel');
        $channel->description = $request->input('description');
        $channel->tags = $request->input('category');
        $channel->url = $request->input('url');
        $channel->featured = $request->input('featured');
        $channel->active = $request->input('active');
        $channel->position = $request->input('position');
        $channel->hidden = $request->input('hidden');
        $channel->channelType = $request->input('channelType');
        $channel->userID = $request->input('userID');
       // $channel->filename = $imageName;
        if($request->hasfile('filename')){
            $file = $request->file('filename');
            $extension = $file->getClientOriginalExtension(); // getting image thumbnail extension
            $filename = time(). '.' . $extension;
            $file->move('uploads/channel/', $filename);
            $channel->filename = $filename;
        } else {
            //return $request;

            $channel->filename = '';
        }




        $channel->save();

        return redirect('/channel')->with('success', 'Channel has been successfully added ');




    }
    public function edit($id){

        $channels = Channels::find($id);

        return view('edit_channel', compact('channels'));


    }

    public function update(Request $request, $id ){

       /* $request->validate([
            'channel'  => 'required',
            'category' => 'required'
        ]);*/

        $channel = Channels::find($id);

        $channel->channel = $request->input('channel');
        $channel->description = $request->input('description');
        $channel->tags = $request->input('category');
        $channel->url = $request->input('url');
        $channel->featured = $request->input('featured');
        $channel->active = $request->input('active');
        $channel->position = $request->input('position');
        $channel->hidden = $request->input('hidden');
        $channel->channelType = $request->input('channelType');
        $channel->userID = $request->input('userID');
        if($request->hasfile('filename')){
            $file = $request->file('filename');
            $extension = $file->getClientOriginalExtension(); // getting image thumbnail extension
            $filename = time(). '.' . $extension;
            $file->move('uploads/channel/', $filename);
            $channel->filename = $filename;
        } else {
            //return $request;

            $channel->filename = '';
        }

        $channel->save();

        return redirect('/channel')->with('success', 'Channel has been successfully updated!');
    }




    public function delete($id)
    {
        $channel = Channels::find($id);
        //dd($category);
        $channel->delete();
        return redirect('/channel')->with('success', 'Channel have been deleted ');
    }

}

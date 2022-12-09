<?php

namespace App\Http\Controllers;

use App\Models\songs;
use App\Models\artist;
use App\Models\Merch;
use Artists;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('pages.admin_artistlist');
    }

    public function songlisting()
    {
        //
        return view('pages.admin_songlist_view');
    }


    public function showprofile(artist $artist)
    {
        //
                $data= artist::all();
                return view ('pages.artistprofileview', ['artist'=>$data]);
    }

    /**
     * Show the form for ing the specified resource.
     *
     * @param  \App\Models\artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function song_(songs $data, $id)
    {
                //
                $data=songs::find($id);
                return view ('pages.admin_songupdate',['songs'=>$data]);
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function song_register(Request $request)
    {
        //
         //
         $message=[
            'required' => 'This information is required!'
        ];
        {
        $request->validate([
            'artist_id' => 'required',
            'songname' => 'required',
            'author' => 'required',   
            'genre' => 'required',
            'date_registered' => 'required',
            'album' => 'required',
            'info' => 'required',
            'info2' => 'required',
            'info3' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'background_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'audio' =>'nullable|file|mimes:audio/mpeg,mpga,mp3,wav,aac'
        ], $message);
  
        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
    
        if ($background_image = $request->file('background_image')) {
            $destinationPath = '1st_bg/';
            $profileImage = date('YmdHis') . "." . $background_image->getClientOriginalExtension();
            $background_image->move($destinationPath, $profileImage);
            $input['background_image'] = "$profileImage";
        }

        if ($music = $request->file('audio')) {
            $destinationPath = 'songs/';
            $profileImage = date('YmdHis') . "." . $music->getClientOriginalExtension();
            $music->move($destinationPath, $profileImage);
            $input['audio'] = "$profileImage";
        }
        
    
       songs::create($input);
       return redirect('/song-listing/{id}')
                       ->with('success','Artist Registered Successfully.');
   } 
}


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.admin_artist_register');
    }

       /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register_song_view()
    {
        //
        return view('pages.admin_songregister');
    }


    public function artist_musiclisting(songs $data, $id)
    {
        //
                     $data=songs::find($id);
                     return view ('pages.admin_songlist_view',['artist'=>$data]);
       
    }

    public function initialize_song_showdata(songs $data, $id)
    {
        //
            
                $data= songs::all();
                return view ('pages.admin_songlist_view', ['artist'=>$data]);
    }

      /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function view()
    {
        //
        return view('pages.artistprofileview');
    }

    /** 
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function artist_register(Request $request)
    {
 //  
 $message=[
    'required' => 'This information is required!'
];
{
$request->validate([
    'artistname' => 'required',
    'realname' => 'required',   
    'number' => 'required',
    'genre' => 'required',
    'mail' => 'required',
    'dateregistered' => 'required',
    'nationality' => 'required',
    'address' => 'required',
    'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
    'background_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
    'secondbackground_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg'
], $message);

$input = $request->all();

if ($image = $request->file('image')) {
    $destinationPath = 'image/';
    $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
    $image->move($destinationPath, $profileImage);
    $input['image'] = "$profileImage";
}

if ($image = $request->file('background_img')) {
    $destinationPath = '1st_bg/';
    $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
    $image->move($destinationPath, $profileImage);
    $input['background_img'] = "$profileImage";
}

if ($image = $request->file('secondbackground_img')) {
    $destinationPath = '2nd_bg/';
    $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
    $image->move($destinationPath, $profileImage);
    $input['secondbackground_img'] = "$profileImage";
}
artist::create($input);
return redirect('/artistlist')
                ->with('success','Artist Registered Successfully.');
}
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function show(artist $data)
    {
                //
                $data= artist::all();
                return view ('pages.admin_artistlist', ['artist'=>$data]);
    }


      /**
     * Display the specified resource.
     *
     * @param  \App\Models\artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function artistprofile_view()
    {
        //
            return view('pages.admin_artist_Profile');
     }

     
     
      /**
     * Display the specified resource.
     *
     * @param  \App\Models\artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function artist_profile(artist $data , $id)
    {
        //
             $data=artist::find($id);
                return view ('pages.admin_artist_PROFILE', ['artist'=>$data]);
    }
    
     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function song_update(Request $request, songs $data)
    {
        //
                $message=[
                    'required' => 'This credential field is required!'
                ];
                $request->validate([
                    'artist_id' => 'required',
                    'songname' => 'required',
                    'genre' => 'required',
                    'author' => 'required',
                    'date_registered' => 'required',
                    'album' => 'required',
                    'info' => 'required',
                    'info2' => 'required',
                    'info3' => 'required',
                    'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                    'background_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                    'secondbackground_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ],$message);
            
        $data=songs::find($request->id);
        $data->artist_id=$request->artist_id;
        $data->songname=$request->songname;
        $data->author=$request->author;   
        $data->genre=$request->genre;    
        $data->date_registered=$request->date_registered;    
        $data->album=$request->album;    
        $data->info=$request->info;    
        $data->info2=$request->info2;    
        $data->info3=$request->info3;    
        $data->save();

    $input = $request->all();
if ($image = $request->file('image')) {
    $destinationPath = 'image/';
    $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
    $image->move($destinationPath, $profileImage);
    $input['image'] = "$profileImage";
}else
{
    unset($input['image']);
}
if ($image = $request->file('background_image')) {
    $destinationPath = '1st_bg/';
    $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
    $image->move($destinationPath, $profileImage);
    $input['background_image'] = "$profileImage";
}
else
{
    unset($input['background_image']);
}
if ($image = $request->file('audio')) {
    $destinationPath = '2nd_bg/';
    $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
    $image->move($destinationPath, $profileImage);
    $input['audio'] = "$profileImage";
}
else
{
    unset($input['audio']);
}
$members->update($input);
    return redirect('/song-listing/{id}')
            ->with('success','Song details Updated Successfully');
    }    
        /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function delete_songs(songs $songs, $id)
    {
           //
           $songs=songs::find($id);
           $songs->delete();
           return redirect('song-listing/id')
           ->with('success', 'Track , Removed Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function edit_artist($id)
    {
                //
                $artist=artist::find($id);
                return view ('pages.admin_artistprofileupdate',['artist'=>$artist]);
    }

    public function song_update_view(songs $songs, $id)
    {
                //
                $songs=songs::find($id);
                return view ('pages.admin_songupdate',['songs'=>$songs]);
    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function editview()
    {
                //
                return view ('pages.admin_artistprofileupdate');
    }
    /**

     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update_artist(Request $request, artist $members)
    {
        //
        $message=[
            'required' => 'This credential field is required!'
        ];
        $request->validate([
          
            'artistname' => 'required',
            'realname' => 'required',
            'number' => 'required',
            'genre' => 'required',
            'mail' => 'required|email',
            'dateregistered' => 'required',
            'nationality' => 'required',
            'address' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',  
            'background_img' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',  
            'secondbackground_img' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',  

    ],$message);
    
$members=artist::find($request->id);
$members->artistname=$request->artistname;
$members->realname=$request->realname;    
$members->number=$request->number;
$members->genre =$request->genre ;
$members->mail =$request->mail ;
$members->dateregistered =$request->dateregistered ;
$members->nationality =$request->nationality ;
$members->address =$request->address ;
$members->save();

$input = $request->all();

if ($image = $request->file('image')) {
    $destinationPath = 'image/';
    $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
    $image->move($destinationPath, $profileImage);
    $input['image'] = "$profileImage";
}else
{
    unset($input['image']);
}

if ($image = $request->file('background_img')) {
    $destinationPath = '1st_bg/';
    $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
    $image->move($destinationPath, $profileImage);
    $input['background_img'] = "$profileImage";
}
else
{
    unset($input['background_img']);
}

if ($image = $request->file('secondbackground_img')) {
    $destinationPath = '2nd_bg/';
    $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
    $image->move($destinationPath, $profileImage);
    $input['secondbackground_img'] = "$profileImage";
}
else
{
    unset($input['secondbackground_img']);
}

$members->update($input);
return redirect()->route('admin_artistlist')
                ->with('success','Artist Credentials Updated Successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function destroy_artist(artist $artist, $id)
    {
           //
           $artist=artist::find($id);
           $artist->delete();
           return redirect()->route('admin_artistlist')
           ->with('success', 'Artists , Removed Successfully');
    }

    /*---------------------------------------------------------------------------------------------
    -----------------------------------------------------------------------------------------------*/
      /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_product()
    {
        //
        return view ('pages.admin_product_register');
    }

    public function product_index()
    {
        //
        return view ('pages.admin_productlist');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_product(Request $request)
    {
        //
        $message=[
            'required' => 'This credential field is required!'
        ];
        $request->validate([
            'name'=>'required',
            'price'=>'required',
            'quantity'=>'required'
    
        ],$message);
        Merch::create($request->all());
        return redirect()->route('executive_productlist')
                        ->with('success', 'Product Registered Successfully');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Merch  $contact
     * @return \Illuminate\Http\Response
     */
    public function show_product(Merch $data)
    {
        //
        $data= Merch::all();
        return view ('pages.admin_productlist', ['product'=>$data]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit_product($id)
    {
        //
        $data=Merch::find($id);
        return view ('pages.admin_product_update',['product'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Merch  $contact
     * @return \Illuminate\Http\Response
     */
    public function update_product(Request $request)
    {
        //
        $message=[
            'required' => 'This credential field is required!'
        ];
        $request->validate([
            'name'=>'required',
            'price'=>'required',
            'quantity'=>'required'],$message);

        $request=Merch::find($request->id);
        $request->name=$request->name;
        $request->price=$request->price;    
        $request->quantity=$request->quantity;
        $request->save();
        return redirect()->route('executive_productlist')
        ->with('success', 'Product, Updated Successfully');

    }

    /**
     * Remove the specified resource f  rom storage.
     *
     * @param  \App\Models\Merch  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy_product($id)
    {
        //
        $product=Merch::find($id);
        $product->delete();
        return redirect()->route('executive_productlist')
        ->with('success', 'Product, Deleted Successfully');
    }
}

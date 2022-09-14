<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;


Route::get('/', function () {
    return view('listings',[
        'heading'=> 'Latest Listings',
        'listings' => Listing::all() 
    ]);
});

//singleton listing
Route::get('/listings/{listing}', function(Listing $listing){
  
    return view('listing',[
        'listing' => $listing
    ]);        
        
    
});


// Route::get('/hello', function () {
//     return response('Hello World',404)
//     ->header('Content-type','text/plain')
//     ->header('foo','bar');
// });

// Route::get('/posts/{id}',function($id){
//     // dd($id); // die and dump
//     // ddd($id);
//     return response('Post'.$id);
// })->where('id','[0-9]+');

// Route::get('/search',function(Request $request){
//     return($request->name . ' ' . $request->city);
// });
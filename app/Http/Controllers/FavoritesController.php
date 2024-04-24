<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class FavoritesController extends Controller
{

    public function index()
    {
        return auth()->user()->favorites()->cursorPaginate(20);
    }

    public function store(Request $request):JsonResponse
    {
        if(auth()->user()->HasFavorites($request->product_id)){
            return response()->json(['result','Product have been already added to Favorites']);
        }
        auth()->user()->favorites()->attach($request->product_id);
        return response()->json(['result','Product added to Favorites successfully']);
    }


    public function show(string $id)
    {
        //
    }



    public function destroy($favorite_id):JsonResponse
    {
        if(auth()->user()->HasFavorites($favorite_id)){
            auth()->user()->favorites()->detach($favorite_id);
            return response()->json(['success',true]);
        }
        return response()->json(['result','Favorite did not found!']);
    }
}

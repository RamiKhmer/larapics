<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImageRequest;
use App\Models\Image;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index(){
        $images = Image::published()->latest()->paginate(4);
     return view('images.index', compact('images'));
    }

    public function show(Image $image){
        // $image = Image::published()->where('slug', $slug);
      //   $ddd = Carbon::parse($image->created_at)->diffInHours(new DateTime());
        $ddd = $image->created_at->diffForHumans();
        return view('images.show', compact('image', 'ddd'));
    }

    public function create()
    {
       return view('images.create');
    }

    public function store(ImageRequest $request)
    {
       Image::create($request->getData());
       return to_route('images.index')->with('message', 'Image has been upload successfully');
    }

    public function edit(Image $image)
    {
       return view('images.edit', compact('image'));
    }

    public function update(Image $image, ImageRequest $request)
    {
       $image->update($request->getData());
       return to_route('images.index')->with('message', 'Image has been updated successfully');
    }

    public function destroy(Image $image)
    {
       $image->delete();
       return to_route('images.index')->with('message', 'Image has been deleted successfully');
    }
}

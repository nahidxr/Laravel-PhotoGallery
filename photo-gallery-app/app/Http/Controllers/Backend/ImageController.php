<?php

namespace App\Http\Controllers\Backend;

use App\Models\Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ImageController extends Controller
{
    public function ImageView()
    {
        $data['allData'] = Image::all();
        return view('backend.image.view_image',$data);
    }
    public function ImageAdd()
    {

        return view('backend.image.add_image');
    }
    public function ImageStore(Request $request)
    {

        $validatedData = $request->validate([


            'title' => 'required',
            'description' => 'required',

        ]);

        $data = new Image();
        $data->title = $request->title;
        $data->description = $request->description;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('upload/images', $filename);
            $data->image = $filename;
        }
        $data->save();

        $notification = array(
            'message' => 'Image Inserted Successfully',
            'alert-type' => 'success'

        );
        return redirect()->route('image.view')->with($notification);
    }

    public function ImageEdit($id){

        $editData = Image::find($id);

        return view('backend.image.edit_Image', compact('editData'));

    }
}

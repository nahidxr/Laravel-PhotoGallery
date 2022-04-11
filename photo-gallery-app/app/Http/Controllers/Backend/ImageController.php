<?php

namespace App\Http\Controllers\Backend;

use App\Models\Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class ImageController extends Controller
{
    public function ImageView(Request $request)
    {
        $data['allData'] = Image::all();
        // return $data;
        // $data['allData'] = Image::paginate();
        return view('backend.image.view_image', $data);
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

    public function ImageEdit($id)
    {

        $editData = Image::find($id);

        return view('backend.image.edit_Image', compact('editData'));
    }
    public function ImageUpdate(Request $request, $id)
    {

        $data = Image::find($id);

        $validatedData = $request->validate([


            'title' => 'required',
            'description' => 'required',

        ]);

        $data->title = $request->title;
        $data->description = $request->description;
        if ($request->hasFile('image')) {
            $destination = 'upload/images/' . $data->image;
            if (File::exists($destination)) {

                File::delete($destination);
            }


            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('upload/images', $filename);
            $data->image = $filename;
        }
        $data->update();

        $notification = array(
            'message' => 'Image Updated Successfully',
            'alert-type' => 'success'

        );
        return redirect()->route('image.view')->with($notification);
    }
    public function ImageDelete($id)
    {

        $data = Image::find($id);
        unlink("upload/images/" . $data->image);
        $data->delete();
        $notification = array(
            'message' => 'Image Deleted Successfully',
            'alert-type' => 'info'
        );
        return redirect()->route('image.view')->with($notification);
    }
    public function sortData($id)
    {
        if ($id == 1) {
            $data['allData'] = Image::orderBy('title', 'desc')->get();
        } else {
            $data['allData'] = Image::orderBy('created_at', 'desc')->get();
        }
        //return view('backend.image.view_image', compact('data'));
        // return response()->json($data);
        //return response()->json($data);
        // return $data;
        // $data['allData'] = Image::paginate();
        return view('backend.image.view_image', $data)->render();
    }
}

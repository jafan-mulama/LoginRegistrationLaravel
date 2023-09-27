<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    function fileuploadView(){
        return view('upload');
    }
    function uploadFile(Request $request) {
        if ($request->hasFile('file')) {
            $path = $request->file('file')->store('documents');

            if ($path) {
                return 'File uploaded successfully. Path: ' . $path;
            } else {
                return 'File upload failed.';
            }
        } else {
            // Handle the case where no file was uploaded.
            return 'No file selected.';
        }
    }

}

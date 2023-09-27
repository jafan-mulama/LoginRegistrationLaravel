<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File; // Import the File model from the correct namespace
class FileUploadController extends Controller
{
    function fileuploadView(){
        return view('upload');
    }
    function uploadFile(Request $request) {
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $originalName = $file->getClientOriginalName(); // Get the original file name
            $newName = uniqid() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('documents', $newName);
            // Store the file using the original name
            $path = $file->storeAs('documents', $originalName);


            if ($path) {
                // Create a database record for the file
                // or any other value you want to store
                $fileRecord = new File();
                $fileRecord->filesize2 = $file->getSize();
                $fileRecord->fileNewname = $newName;
                $fileRecord->filename =  $originalName; // Or any other relevant metadata
                $fileRecord->filepath = $path;
                $fileRecord->filesize = $file->getSize();
               
                // Set other properties as needed
                $fileRecord->save();

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

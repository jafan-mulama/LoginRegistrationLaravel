@extends('layout')

@section('title', 'file upload')

@section('body_Content')
    <form action="{{ route('fileupload') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file" />
        <button type="submit">Upload</button>
    </form>
@endsection

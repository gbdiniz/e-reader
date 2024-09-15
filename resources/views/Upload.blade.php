@extends('templates.master')
@section('title', 'Book Upload')
@section('content')
    <div class="container mt-5">
        <form action="{{ route('bookUpload') }}" method="post" enctype="multipart/form-data">
            @csrf
            <!-- Success message -->
            @if ($message = Session::get('success'))
                <div class="alert alert-success"> 
                    <strong>{{ $message }}</strong>
                </div>
            @endif
            <!-- Error messages -->
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <!-- PDF upload input -->
            <div class="custom-file mb-3">
                <input type="file" name="pdf" id="pdf" class="custom-file-input">
                <label for="pdf" class="custom-file-label">Select PDF</label>
            </div>
            <!-- Cover image upload input -->
            <div class="custom-file mb-3">
                <input type="file" name="cover_image" id="cover_image" class="custom-file-input">
                <label for="cover_image" class="custom-file-label">Select Cover Image</label>
            </div>
            <!-- Book title input -->
            <div class="form-group mb-3">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Upload Book</button>
        </form>
        @if (Session::has('success'))
            <h1 class="mt-5">Uploaded Book Details</h1>
            <div>
                @if(Session::has('book'))
                    <h2>Uploaded Book</h2>
                    <img src="{{ asset('storage/uploads/pdfs/' . Session::get('book')) }}" alt="Uploaded Book" class="img-fluid">
                @endif
                @if(Session::has('cover_image'))
                    <h2>Cover Image</h2>
                    <img src="{{ asset('storage/uploads/covers/' . Session::get('cover_image')) }}" alt="Cover Image" class="img-fluid">
                @endif
            </div>
        @endif
    </div>
@endsection

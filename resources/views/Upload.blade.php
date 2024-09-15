@extends('templates.master')
@section('title', 'Show Book')
@section('content')

<head>
    <title>Book Upload</title>
</head>
<body>
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
            <!-- File upload input -->
            <div class="custom-file mb-3">
                <input type="file" name="book" id="book" class="custom-file-input">
                <label for="book" class="custom-file-label">Select Book</label>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Upload Book</button>
        </form>
        @if (Session::has('book'))
            <h1 class="mt-5">Book Contents</h1>
            <div>
                <img src="{{ asset('storage/uploads/' . Session::get('book')) }}" alt="Uploaded Book Image" class="img-fluid">
            </div>
        @endif
    </div>
</body>
</html>
@endsection('content')

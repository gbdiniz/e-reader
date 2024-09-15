<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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

        <!-- Display uploaded book (if available) -->
        @if (Session::has('book'))
            <h1 class="mt-5">Book Contents</h1>
            <div>
                <img src="{{ asset('storage/uploads/' . Session::get('book')) }}" alt="Uploaded Book Image" class="img-fluid">
            </div>
        @endif
    </div>
</body>
</html>

//Implement PDF reader which can open pdf files and display them in the browser.
@extends('templates.master')
@section('title', 'Show Book')
@section('styles')
    <style>
        #imageContainer img {
            width: 100%;
            height: auto;
        }
    </style>
@endsection
@section('content')
<header>
<nav class="navbar navbar-expand-lg bg-light">
        <div class="col-auto" style="margin:5px">
            <h1>Libre</h1>
        </div>
</nav>
</header>
<body>
    <div class="container mt-5">
        <h1>{{ $title }}</h1>
        <div id="imageContainer">
            @if(isset($fileName))
                <!-- Correctly display the selected image -->
                <img src="{{ asset('storage/uploads/' . $fileName) }}" alt="{{ $title }}">
            @else
                <p>No image selected.</p>
            @endif
        </div>
    </div>
    <div id="pspdfkit" style="height: 100vh"></div>
    <script src="{{ asset('assets/pspdfkit.js') }}"></script>

    <script>
			PSPDFKit.load({
				container: "#pspdfkit",
				document: "{{ asset('storage/uploads/' . $fileName) }}", // Add the path to your document here.
			})
			.then(function(instance) {
				console.log("PSPDFKit loaded", instance);
			})
			.catch(function(error) {
				console.error(error.message);
			});
		</script>
</body>
@endsection

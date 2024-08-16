<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    {{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}

    <form class="w-75 m-auto mt-2" method="post" action="{{ route('tracks.store') }}" enctype="multipart/form-data">
        @csrf
        {{-- {{name}} --}}
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
            <label for="exampleInputName1" class="form-label">Name </label>
            <input name="name" type="text" class="form-control" id="exampleInputName1">

        </div>
        {{-- {{about}} --}}
        @error('about')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
        <div class="mb-3">
            <label for="exampleInputAbout1" class="form-label">about</label>
            <input name="about" type="text" class="form-control" id="exampleInputAbout1">

        </div>
        {{-- {{image}} --}}
        <div class="mb-3">
            <label for="exampleInputimage1" class="form-label">Track Logo </label>
            <input name="image" type="file" class="form-control" id="exampleInputimage1">
        </div>




        <button type="submit" class="btn btn-primary">Create Student</button>
    </form>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>

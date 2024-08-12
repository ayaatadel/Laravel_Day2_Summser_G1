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

<a href="{{route('tracks.create')}}"><button class="btn btn-success">Create Track</button></a>
    <fieldset>
        <legend>Tracks Data</legend>
        <table class="table w-75 m-auto table-bordered mt-5">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">name</th>
                    <th scope="col">logo</th>
                    <th scope="col">About</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

                {{-- @dump($tracks) --}}
                @foreach ($tracks as $track)
                    <tr>
                        {{-- {{$track["id"]}} --}}
                        <td>{{ $track->id }}</td>
                        <td>{{ $track->name }}</td>
                        <td><img src="{{ $track->logo }}" alt="" class="w-50 h-50 bordered-circled"></td>
                        <td>{{ $track->about }}</td>

                        <td>
                            <a class="btn btn-info" href="{{ route('tracks.show', $track->id) }}">Show</a>
                            {{-- <a class="btn btn-warning" href="{{ route('tracks.edit', $track->id) }}">Edit</a>
--}}
                            <form action="{{ route('tracks.destroy', $track) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>

                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </fieldset>
<div class="w-50 m-auto mt-2 text-success">{{$tracks->links()}}</div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>

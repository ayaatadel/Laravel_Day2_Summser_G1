<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

{{-- @dd($student->track) --}}
        <fieldset>
            <legend>Students Data</legend>
            <table class="table w-75 m-auto table-bordered mt-5">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">name</th>
                        <th scope="col">email</th>
                        <th scope="col">address</th>
                        <th scope="col">image</th>
                        <th scope="col">gender</th>
                        <th scope="col">age</th>
                        <th scope="col">track Name</th>

                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                        <tr>

                            <td>{{ $student->id }}</td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->email }}</td>
                            <td>{{ $student->address }}</td>
                            <td>{{ $student->image }}</td>
                            <td>{{ $student->gender }}</td>
                            <td>{{ $student->age }}</td>
                            <td>{{ $student->track->name }}</td>
                            <td>
                                <a class="btn btn-info" href={{route('students.index')}} >Back</a>
                            </td>
                        </tr>



                </tbody>
            </table>
        </fieldset>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>

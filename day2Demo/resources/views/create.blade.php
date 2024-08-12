<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>


    <form class="w-75 m-auto mt-2" method="post"  action="{{route('students.store')}}"
    enctype="multipart/form-data">
        @csrf
        {{-- {{name}} --}}
        <div class="mb-3">
          <label for="exampleInputName1" class="form-label">Name </label>
          <input name="name" type="text" class="form-control" id="exampleInputName1">

        </div>
         {{-- {{email}} --}}
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input name="email" type="email" class="form-control" id="exampleInputEmail1" >

        </div>
         {{-- {{image}} --}}
        <div class="mb-3">
            <label for="exampleInputimage1" class="form-label">image </label>
            <input name="image" type="file" class="form-control" id="exampleInputimage1">
          </div>
       {{-- {{address}} --}}
          <div class="mb-3">
            <label for="exampleInputAddress1" class="form-label">Address </label>
            <input name="address" type="text" class="form-control" id="exampleInputAddress1">
          </div>
    {{-- {{age}} --}}
          <div class="mb-3">
            <label for="exampleInputAge1" class="form-label">Age</label>
            <input name="age" type="integer" class="form-control" id="exampleInputAge1">

          </div>
           {{-- {{grade}} --}}
          <div class="mb-3">
            <label for="exampleInputGrade1" class="form-label">Grade </label>
            <input name="grade" type="number" class="form-control" id="exampleInputGrade1">

          </div>

          <div class="mb-3">
            <label for="gender" class="form-label">Gender </label>
            <div class="form-check">
                <input  class="form-check-input" type="radio" name="gender" id="male" value='male'>
                <label class="form-check-label" for="male">
                 Male
                </label>
              </div>
              <div class="form-check">
                <input  class="form-check-input" type="radio" name="gender" id="female"  value="female">
                <label class="form-check-label" for="female">
                 Female
                </label>
              </div>


          </div>
        <button type="submit" class="btn btn-primary">Create Student</button>
      </form>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

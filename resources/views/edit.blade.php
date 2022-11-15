<!DOCTYPE html>
<html>

<head>
    <title>
        TODO LIST
    </title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body class="bg-dark">
    <div class="container mt-5 p-4 bg-light rounded">

        
        <form action="{{route('updateTodo')}}" method="post" class=" row justify-content-between">
            @csrf
            <div class="form-floating p-2 col-11">
                <input type="hidden" value="{{$data->id}}" name="id">
                <input type="text" class="form-control active" id="floatingInput" name="title" autofocus>
                <label for="floatingInput">Task</label>
            </div>
            <div class="col-1 p-0 mt-2 mr-1 ">
                <button type="submit" class="p-3 btn btn-dark ">Update</button>
            </div>
        </form>

       
    </div>

</body>

</html>
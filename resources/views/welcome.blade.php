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

        <form action="{{route('saveTodo')}}" method="post" class=" row justify-content-between">
            @csrf
            <div class="form-floating p-2 col-11">
                <input type="text" class="form-control" id="floatingInput" name="title"
                    placeholder="Enter your task here">
                <label for="floatingInput">Task</label>
            </div>
            <div class="col-1 p-0 mt-2 mr-1 ">
                <button type="submit" class="p-3 btn btn-dark ">Add</button>
            </div>
        </form>

        <table class="table">
            <thead>

                <tr>
                    <th scope="col">SN</th>
                    <th scope="col">Tasks</th>

                    <th scope="col"> Actions </th>
                </tr>
            </thead>

            <tbody>

                <?php $count = 0; ?>
                @foreach($list as $task)

                <tr>
                    <td>{{++$count}}</td>
                    <td>{{$task->title}}</td>

                    <td>
                        <a href="{{url('/edit-todo/' . $task->id)}}" class="btn btn-outline-danger">Edit</a>
                    
                        <a href="{{url('/delete-todo/' . $task->id)}}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>

</body>

</html>
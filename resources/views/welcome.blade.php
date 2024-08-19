<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ env('APP_NAME') }}</title>
    <style>
        /* .todo-list-item {
            cursor: pointer;
        }

        .todo-list-item:hover {
            text-decoration: underline;
            color: #0000ff
        } */
    </style>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body class="bg-dark text-white" style="height: 100vh;">
    <div class="container py-3 h-100">
        <div class="row">
            <div class="col">
                <div class="d-flex justify-content-center align-items-center">
                    <form id="myForm" class="text-center">
                        @csrf
                        <div>
                            <label for="task">TASK</label>
                            <input class="form-control mb-1" type="text" id="task" name="task"
                                placeholder="enter task here..." required />
                        </div>
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div id="todo-list" class="d-flex flex-wrap flex-row">
                    @if (!empty($list))
                        @foreach ($list as $task)
                            <div class="todo-list-item m-3 border border-1 rounded bg-light text-dark p-2">
                                @if ($task['status'] == 'done')
                                    <div class="text-success">{{$task['task']}}</div>
                                @else
                                    <div>{{$task['task']}}</div>
                                @endif
                                <button class="btn btn-sm btn-danger mx-2 delete-btn" data-id="{{ $task['task_id'] }}"
                                    type="button">Delete</button>
                                <button class="btn btn-sm btn-primary mx-2 done-btn" data-id="{{ $task['task_id'] }}"
                                    type="button">Done</button>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- JavaScript -->
    <script>
        document.getElementById('myForm').addEventListener('submit', function (event) {
            event.preventDefault();

            const formData = new FormData(this);

            fetch('/todo/create', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: formData,
            })
                .then(response => response.json())
                .then(data => {
                    console.log(data);
                    // Optionally, add the new task to the DOM
                    window.location.reload(); // Or dynamically update the list
                })
                .catch(error => {
                    console.error('Error:', error);
                });

            this.reset();
        });


        // Add event listeners to Done buttons
        document.querySelectorAll('.done-btn').forEach(button => {
            button.addEventListener('click', function () {
                const taskId = this.getAttribute('data-id');
                fetch(`/todo/done/${taskId}`, {
                    method: 'PUT',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({ status: 'done' })
                })
                    .then(response => response.json())
                    .then(data => {
                        console.log(data); // Handle response data
                        // Optionally, update the list without reloading
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
            });
        });

        // Add event listeners to Delete buttons
        document.querySelectorAll('.delete-btn').forEach(button => {
            button.addEventListener('click', function () {
                const taskId = this.getAttribute('data-id');
                fetch(`/todo/delete/${taskId}`, {
                    method: 'DELETE',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    }
                })
                    .then(response => response.json())
                    .then(data => {
                        console.log(data); // Handle response data
                        // Optionally, remove the task from the DOM
                        this.parentElement.remove();
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
            });
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>
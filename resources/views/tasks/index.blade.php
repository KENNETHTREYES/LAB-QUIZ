<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            padding: 20px;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        a {
            color: #BLUE;
            text-decoration: none;
            margin-bottom: 20px;
            
        }

        form {
            display: inline-block;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 5px 10px;
            border: none;
            cursor: pointer;
            text-decoration: none;
        }
        

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body >
    
    <h1>Task List</h1>
    <a href="{{ route('tasks.create') }}">Create New Task</a>
    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
                <tr>
                    <td>{{ $task->title }}</td>
                    <td>{{ $task->description }}</td>
                    <td>
                        
                        <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                            <a href="{{ route('tasks.edit', $task->id) }}"><button type="submit">Edit</button></a>
                        </form>
                    </td>
                </tr>
                
            @endforeach
        </tbody>
    </table>
</body>
</html>
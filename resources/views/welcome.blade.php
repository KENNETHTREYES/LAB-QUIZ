<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Task</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
    }

    h1 {
        text-align: center;
        margin-top: 20px;
    }

    .form-container {
        width: 100%;
        max-width: 500px;
        margin: 0 auto;
        padding: 20px;
        box-sizing: border-box;
        background-color: #f9f9f9;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    form {
        display: flex;
        flex-direction: column;
    }

    label {
        margin-bottom: 5px;
    }

    input[type="text"], textarea {
        margin-bottom: 20px;
        padding: 8px;
        border: 1px solid #ddd;
        border-radius: 3px;
    }

    button[type="submit"] {
        padding: 8px 16px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }

    button[type="submit"]:hover {
        background-color: #45a049;
    }
</style>
<body>
        <h1>Create Task</h1>
        
    <div class="form-container">
        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" required>
            <br>
            <label for="description">Description:</label>
            <textarea name="description" id="description" rows="3" required></textarea>
            <br>
            <button type="submit">Create Task</button>
        </form>
    </div>
</body>
</html>
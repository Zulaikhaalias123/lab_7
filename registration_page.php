<!DOCTYPE html>
<html>
<head>
    <title>Registration Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: lightblue;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        form {
            background: lightcoral;
            padding: 70px;
            border-radius: 6px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 2px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: blue;
            color: black;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: white;
        }
    </style>
</head>
<body>

    <form action="insert.php" method="post">
    <h2>Welcome to Register page</h2>
        <label for="matric">Matric:</label>
        <input type="text" name="matric" id="matric" required><br>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required><br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br>
        <label for="accessLevel">Role:</label>
            <select name="role" id="accessLevel" required>
                <option value="">Please select</option>
                <option value="lecturer">Lecturer</option>
                <option value="student">Student</option>
        </select><br><br>
        <input type="submit" name="submit" value="Register">
</form>
</body>
<html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
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
    <form action="authenticate.php" method="post">
        <h2>Login Page</h2>
        <label for="matric">Matric:</label>
        <input type="text" name="matric" id="matric" required><br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br>
        <input type="submit" name="submit" value="Submit">
        <div class="register">
            <p>Don't have any account?<a href="registration_page.php">Register Here</a></p>
        </div>
    </form>
</body>

</html>


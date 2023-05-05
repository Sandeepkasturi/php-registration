<html>
<head>
    <title>Details</title>
    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
        }

        form {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        form h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        form label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        form input[type="text"],
        form input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        form input[type="radio"],
        form input[type="checkbox"] {
            margin-right: 5px;
        }

        form input[type="submit"] {
            background-color: #3498db;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        form input[type="submit"]:hover {
            background-color: #2186c4;
        }
    </style>
</head>
<body>
    <form method="post" action="process.php">
        <h2>Details</h2>
        <label>Enter your name:</label>
        <input type="text" name="uname" placeholder="Enter your name" required><br/>
        <label>Enter your password:</label>
        <input type="password" name="password" placeholder="Enter your password" required><br/>
        <label>Re-enter your password:</label>
        <input type="password" name="rpassword" placeholder="Re-enter your password" required><br/>
        <label>Enter your email-id:</label>
        <input type="text" name="mail" placeholder="Enter your email" required><br/>
        <label>Select your gender:</label>
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="others">Others<br/>
        <label>Select your hobbies:</label>
        <input type="checkbox" name="hobbie[]" value="playing games">Playing games
        <input type="checkbox" name="hobbie[]" value="reading books">Reading books
        <input type="checkbox" name="hobbie[]" value="others">Others
        <br/>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>

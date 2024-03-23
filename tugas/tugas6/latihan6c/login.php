<?php
if (isset($_POST["submit"])) {
    if ($_POST["username"] == "admin" && $_POST["password"] == "unpas") {
        header("Location: admin.php");
        exit;
    } else {
        $error = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>

    <style>
        body {
            background-image: url(img/bg8.jpg);
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 100px;
        }

        .container {
            width: 350px;
            height: 350px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: white;
        }

        img {
            width: 100px;
            height: 100px;
            margin-bottom: 20px;
        }

        ul form li {
            font-family: 'Courier New', Courier, monospace;
            margin-bottom: 10px;
            list-style: none;
        }

        h1 {
            font-family: 'Courier New', Courier, monospace;
            margin-bottom: 20px;
        }

        p {
            color: whitesmoke;
        }

        button {
            cursor: pointer;
            background-color: pink;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Login Admin</h1>
        <img src="img/logo2.jpeg" alt="">

        <?php if (isset($error)) : ?>
            <p>Username / Password salah!</p>
        <?php endif; ?>

        <ul>
            <form action="" method="post">
                <li>
                    <label for="username">Username:</label>
                    <input type="text" name="username" id="username">
                </li>
                <li>
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password">
                </li>
                <li>
                    <button type="submit" name="submit">Login</button>
                </li>
            </form>
        </ul>
</body>

</html>
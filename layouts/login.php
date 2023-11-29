<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PLN Login</title>
    <link rel="shortcut icon" href="<?php echo AST; ?>/img/pln.ico" type="image/x-icon">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to right, #003366, #0057a0);
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            text-align: center;
            max-width: 400px;
            width: 100%;
        }

        .login-container img {
            width: 80px;
            height: auto;
            margin-bottom: 20px;
        }

        .login-form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .form-group {
            margin-bottom: 20px;
            width: 100%;
        }

        .login-title {
            font-size: 24px;
            margin-bottom: 20px;
            color: #0057a0;
            font-weight: bold;
        }

        label {
            font-size: 16px;
            margin-bottom: 5px;
            display: block;
            text-align: left;
            color: #0057a0;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 12px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 5px;
            box-sizing: border-box;
            color: #333;
        }

        .login-btn {
            background-color: #0057a0;
            color: #fff;
            padding: 12px;
            font-size: 18px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }

        .login-btn:hover {
            background-color: #003366;
        }

        .error {
            color : red;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <img src="<?php echo AST; ?>/img/pln.png" alt="Logo PLN">
        <div class="login-title">Login Sistem</div>
        <form class="login-form" action="<?php echo URL; ?>/login/proses" method="post">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Password" required>
            </div>
            <button type="submit" class="login-btn">Login</button>
        </form>
        <?php if (isset($_SESSION['login']) && $_SESSION['login'] == false) { ?>

            <div class="error">
                Login tidak ditemukan
            </div>
        <?php } ?>
    </div>
</body>

</html>

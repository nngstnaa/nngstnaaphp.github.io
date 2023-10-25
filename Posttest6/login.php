<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login/register</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <!-- login/register container -->
    <div class="container">
        <!-- register -->
        <div class="form-container sign-up-container">
            <div class="form">
                <h2>Daftar</h2>
                <form action="sistem/prosesdaftar.php" method="post">
                    <input type="text" name="username" placeholder="Username..." required>
                    <input type="password" name="password" placeholder="Password..." required>
                    <input type="password" name="confirm_password"  placeholder="Confirm Password..." required>
                    <button class="signUp">Daftar</button>
                </form>
            </div>
        </div>
        <!-- login -->
        <div class="form-container sign-in-container">
            <div class="form">
                <h2>Login</h2>
                <form action="sistem/proseslogin.php" method="post">    
                    <input type="text" name="username" placeholder="Username..."required>
                    <input type="password" name="password" placeholder="Password..."required>
                    <button type="submit" class="signIn">Login</button>
                </form>
            </div>
        </div>
        <!-- overlay container -->
        <div class="overlay_container">
            <div class="overlay">
                <!-- overlay left -->
                <div class="overlay_panel overlay_left_container">
                    <h2>hai senang bertemu denganmu!</h2>
                    <p>Ayo login, jika kamu sudah punya akun</p>
                    <button id="sign-in">Login</button>
                </div>
                <!-- overlay right -->
                <div class="overlay_panel overlay_right_container">
                    <h2>Hai! kamu baru?</h2>
                    <p>Ayo daftar terlebih dahulu sebelum pesan!</p>
                    <button id="sign-up">Daftar</button>
                </div>
            </div>
        </div>
    </div>


    <script src="login.js"></script>
</body>

</html>
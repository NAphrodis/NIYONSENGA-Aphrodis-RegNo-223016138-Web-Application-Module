<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Login - Aphro Hotel</title>
    <link rel="stylesheet" href="css/style.css">

    <style>
        /* ================= BODY ================= */
        body {
            margin: 0;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        /* ================= CONTAINER ================= */
        .login-container {
            display: flex;
            width: 1000px;
            max-width: 95%;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
            animation: slideIn 0.6s ease;
            position: relative;
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(-40px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* ================= LEFT IMAGE - MADE LARGER ================= */
        .login-image {
            width: 55%;
            position: relative;
            background-image: url('images/login.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 550px;
        }

        /* Overlay for better design */
        .login-image::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to right, rgba(0,0,0,0.4), transparent);
        }

        /* ================= RIGHT FORM - MADE SMALLER ================= */
        .login-content {
            width: 45%;
            background: white;
        }

        /* ================= HEADER ================= */
        .login-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 40px;
            text-align: center;
        }

        .login-header h2 {
            margin: 0;
            font-size: 28px;
        }

        .login-header p {
            margin-top: 10px;
            font-size: 14px;
            opacity: 0.9;
        }

        /* ================= BODY ================= */
        .login-body {
            padding: 40px;
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: #333;
        }

        .form-group input {
            width: 100%;
            padding: 12px;
            border: 2px solid #ddd;
            border-radius: 10px;
            font-size: 15px;
            transition: 0.3s;
            box-sizing: border-box;
        }

        .form-group input:focus {
            border-color: #667eea;
            outline: none;
            box-shadow: 0 0 5px rgba(102,126,234,0.3);
        }

        /* ================= BUTTON ================= */
        .login-btn {
            width: 100%;
            padding: 14px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-weight: bold;
            font-size: 16px;
            transition: 0.3s;
        }

        .login-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(102,126,234,0.4);
        }

        /* ================= ERROR ================= */
        .error-message {
            background: #fee;
            color: #c33;
            padding: 12px;
            border-radius: 8px;
            margin-bottom: 15px;
        }

        /* ================= SUCCESS ================= */
        .success-message {
            background: #e8f5e9;
            color: #2e7d32;
            padding: 12px;
            border-radius: 8px;
            margin-bottom: 15px;
        }

        /* ================= BACK LINK ================= */
        .back-home {
            text-align: center;
            margin-top: 20px;
        }

        .back-home a {
            text-decoration: none;
            color: #667eea;
            font-size: 14px;
        }

        .back-home a:hover {
            text-decoration: underline;
        }

        /* ================= RESPONSIVE ================= */
        @media (max-width: 768px) {
            .login-container {
                flex-direction: column;
            }

            .login-image {
                width: 100%;
                min-height: 250px;
            }

            .login-content {
                width: 100%;
            }

            .login-body {
                padding: 25px;
            }
        }
    </style>
</head>

<body>

<div class="login-container">

    <!-- LEFT IMAGE - NOW LARGER -->
    <div class="login-image"></div>

    <!-- RIGHT SIDE - NOW SMALLER -->
    <div class="login-content">

        <div class="login-header">
            <h2>Welcome Back!</h2>
            <p>Please login to access admin panel</p>
        </div>

        <div class="login-body">

            <?php
            if (isset($_POST['login'])) {
                $user = $_POST['username'];
                $pass = $_POST['password'];

                if ($user === "admin" && $pass === "1234") {
                    $_SESSION['user'] = $user;

                    echo "<div class='success-message'>
                            Login successful! Redirecting...
                          </div>";

                    echo "<script>
                        setTimeout(function(){
                            window.location.href='view_orders.php';
                        },1000);
                    </script>";
                } else {
                    echo "<div class='error-message'>
                            Invalid username or password.
                          </div>";
                }
            }
            ?>

            <form method="POST">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" placeholder="Enter username" required>
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Enter password" required>
                </div>

                <button type="submit" name="login" class="login-btn">
                    Login
                </button>
            </form>

            <div class="back-home">
                <a href="index.html">← Back to Homepage</a>
            </div>

        </div>

    </div>

</div>

</body>
</html>
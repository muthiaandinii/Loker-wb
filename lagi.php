<!DOCTYPE html>
<html>


<head>
    <title>Login and Sign Up</title>
    <style>
    .container {
        margin: auto;
        width: 50%;
        padding: 10px;
        text-align: center;
    }

    form {
        border: 3px solid #f1f1f1;
        padding: 20px;
    }

    input[type=text],
    input[type=email],
    input[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    button[type=submit] {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
    }

    button[type=submit]:hover {
        opacity: 0.8;
    }

    .loginbtn {
        background-color: #4CAF50;
    }

    .signupbtn {
        background-color: #f44336;
    }

    .hidden {
        display: none;
    }
    </style>
    <script>
    function showSignUp() {
        document.getElementById("login-form").classList.add("hidden");
        document.getElementById("signup-form").classList.remove("hidden");
    }

    function showLogin() {
        document.getElementById("signup-form").classList.add("hidden");
        document.getElementById("login-form").classList.remove("hidden");
    }
    </script>
</head>

<body>
    <div class="container">
        <form id="signup-form" class="hidden" name="signup-form" action="register.php">
            <h1>Sign Up</h1>
            <label for="name"><b>Name</b></label>
            <input type="text" placeholder="Enter Name" name="name" required>

            <label for="email"><b>Email</b></label>
            <input type="email" placeholder="Enter Email" name="email" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <button type="submit" class="signupbtn">Sign Up</button>

            <p>Already have an account? <a href="#" onclick="showLogin()">Login</a></p>
        </form>

        <form id="login-form" name="login-form" action="login.php">
            <h1>Login</h1>
            <label for="email2"><b>Email</b></label>
            <input type="email" placeholder="Enter Email" name="email2" required>

            <label for="psw2"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw2" required>

            <button type="submit" class="loginbtn">Login</button>

            <p>Don't have an account? <a href="#" onclick="showSignUp()">Sign Up</a></p>
        </form>


    </div>
</body>

</html>
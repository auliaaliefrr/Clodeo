@include('layout.head')
<style>
    .login {
        height: 100vh;
    }

    .header h1 {
        font-family: "Poppins";
        font-style: normal;
        font-weight: 600;
        font-size: 32px;
        line-height: 48px;
        color: #080808;
    }

    .header p {
        font-style: normal;
        font-weight: 400;
        font-size: 14px;
        line-height: 21px;
        color: #545454;
        margin-bottom: 20px;
    }

    .login-form label {
        font-style: normal;
        font-weight: 400;
        font-size: 16px;
        line-height: 16px;
        color: #080808;
        margin-top: 4px;
    }

    .login-form input {
        font-style: normal;
        font-weight: 400;
        font-size: 16px;
        line-height: 24px;
        color: #ababab;
    }

    .buttonlogin {
        width: 100%;
        height: 42px;
        background-color: #428EC5 !important;
        color: white;
        border-radius: 8px;
    }

    .content-left {
        padding-right: 17%;
        border-right: 1px solid;
    }

    .signup {
        text-align: center;
    }

    .img-logo {
        width: 400px;
        height: 210px;
        margin-top: 60px;
        margin-left: 100px;
    }
</style>


<body>
    <div class="container h-100">
        <div class="row h-100 d-flex align-content-center">
            <!-- sisi kiri -->
            <div class="col-6 content-left">
                <div class="header">
                    <h1>Welcome Back</h1>
                    <p style="color: #B5B2B2;">Login to your account</p>
                </div>

                <form class="login-form">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" style="margin-bottom:20px !IMPORTANT;" id="username" name="username" placeholder="Enter your username">

                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" style="margin-bottom:20px !IMPORTANT;" placeholder="Enter your password">

                    <!-- <a href="/upload">
                        <button type="submit" class="buttonlogin" style="width:100% !IMPORTANT;" href>Login</button>
                    </a> -->
                    <div>
                        <!-- <button type="submit" class="btn btn-primary btn-block">Sign In</button> -->
                        <a href="home">
                            <button type="submit" class="buttonlogin" style="width:100% !IMPORTANT;">Login</button>
                        </a>

                    </div>
                </form>
                <div class="signup">
                    <p style="color: #B5B2B2;">Don't have an account? <a href="register" style="color: #B5B2B2;">Sign Up</a></p>
                </div>
            </div>

            <!-- sisi kanan -->
            <div class="col-6 text-center">
                <img src="{{ ('/image/folktoon.png' ) }}" class="img-logo">
            </div>
        </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
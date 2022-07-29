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
        line-height: 24px;
        color: #080808;
        margin-top: 20px;
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
        background-color: #080808 !important;
        color: white;
        border-radius: 8px;
    }

    .content-left {
        padding-right: 17%;
        border-right: 1px solid;
    }
</style>


<body>
    <div class="container h-100">
        <div class="row h-100 d-flex align-content-center">
            <!-- sisi kiri -->
            <div class="col-6 content-left">
                <div class="header">
                    <h1>Welcome</h1>
                    <p>Welcome back! Please login.</p>
                </div>

                <form class="login-form" action="{{url('loginproses')}}" method="post">
                    @csrf
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" style="margin-bottom:20px !IMPORTANT;" id="username" name="username" placeholder="Enter your username">

                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" style="margin-bottom:20px !IMPORTANT;" placeholder="Enter your password">

                    <!-- <a href="/upload">
                        <button type="submit" class="buttonlogin" style="width:100% !IMPORTANT;" href>Login</button>
                    </a> -->
                    <div class="">
                        <!-- <button type="submit" class="btn btn-primary btn-block">Sign In</button> -->
                        <button type="submit" class="buttonlogin" style="width:100% !IMPORTANT;" href>Login</button>
                    </div>
                </form>
            </div>

            <!-- sisi kanan -->
            <div class="col-6 text-center">
                <img src="{{ ('/image/logo.png') }}" class="img-logo">
            </div>
        </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
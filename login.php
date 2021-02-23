<!-- login -->

<body class="bg-gradient-primary">

    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Connectez vous</h1>
                                    </div>
                                    <form class="user" action="/login" method="post">
                                        <div class="form-group">
                                            <label for="InputEmail">Email: </label>
                                            <input type="email" name="email" class="form-control form-control-user"
                                                placeholder="" label="Email" id="InputEmail" aria-describedby="emailHelp">
                                            <!-- @if($errors->has('email')) -->
                                            <small id="emailHelp" class="form-text text-muted"><!-- {{$errors->first('email')}} --></small>
                                            <!-- @endif -->
                                        </div>
                                        <div class="form-group">
                                            <label for="InputPassword">Password: </label>
                                            <input type="password" name="password" class="form-control form-control-user"
                                                placeholder=""  label="Password" id="InputPassword" aria-describedby="passwordlHelp">
                                            <!-- @if($errors->has('password')) -->
                                            <small id="passwordlHelp" class="form-text text-muted"><!-- {{$errors->first('password')}} --></small>
                                            <!-- @endif -->
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <input type="submit" value="Se connecter" class="btn btn-primary btn-user btn-block">
                                    </form>
                                    <hr>
                                    <!-- <div class="text-center">
                                        <a class="small" href="{{url('/forgotpassword')}}">Mot de passe oublié?</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</body>

<footer>
    <div class="text-center bg-dark text-white py-4 fixed-bottom">
        <p>Copyright Passionfroid 2021</p>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</html>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Govolte</title>
    <link rel="shortcut icon" href="./img/fav.png" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="css/style1.css">
</head>

<body>

    <div class="container">


        

        <!-- Button to Open the Modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
            Sign In
        </button>

        <!-- The Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <div class="modal-title"><img class="img-fluid" src="img/logo.png"></div>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <p class="title">Use your existing govolte account to sign in</p>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="input-group">
                                <input class="input--style-3 form-control" type="text" placeholder="Your email*" name="email">
                            </div>
                            <div class="input-group">
                                <input class="input--style-3 form-control" type="password" placeholder="Password*" name="password">
                            </div>
                            <div class="extra">
                                <a href="#"><u>I forgot my password</u></a>
                            </div>
                            <div class="p-t-10">
                                <button class="btn btn--pill btn--signin" type="submit" data-target="#">SIGN
                                    IN</button>
                            </div>
                            <p class="title">or sign in using apps you love:</p>
                            <div class="row">
                                <div class="col">
                                    <div class="p-t-10">
                                        <button class="btn btn--pill btn--green" type="submit">SIGN IN WITH GOOGLE
                                            <img src="https://img.icons8.com/color/48/000000/google-logo.png" />
                                        </button>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="p-t-10">
                                        <button class="btn btn--pill btn--green" type="submit">SIGN IN WITH PODIO
                                            <img src="https://img.icons8.com/color/48/000000/podio.png" />
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <p class="extra new">New to teamdeck? <a href="#"><u>Sign up</u></a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>

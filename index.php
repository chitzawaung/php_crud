<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        .error {
            color: red;
        }
    </style>

</head>

<body>
    <div class="container">
        <div class="login-box">
            <div class="row">
                <div class="col-md-6 login-left">
                    <h2 class="form_login">Login Here</h2>
                    <form action="validation.php" method="post">
                        <div class="form-group">
                            <input type="text" name="user" class="form-control" required placeholder="Username">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" required placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>
                <div class="col-md-6 login-right">
                    <h2 class="form_login">Register Here</h2>
                    <form action="register.php" method="post">
                        <div class="form-group">
                            <input type="text" name="user" class="form-control" required placeholder="Username">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" required placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-primary">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.12.0/validate.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

    <script>
        $('form').validate({
            rules: {
                name: {
                    required: true,
                    minlength: 3
                },
                // email: {
                //     required: true,
                //     email: true
                // },
                pasword: {
                    required: true,
                    password: true
                },
            }
        });
    </script>
</body>

</html>
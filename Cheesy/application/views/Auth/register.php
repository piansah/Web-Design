<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$title?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=base_url();?>assets/css/style.css">
</head>

<body>

    <div class="register overflow-hidden d-flex flex-column justify-content-center">
        <form action="<?=base_url();?>Auth/register_validation" method="POST">
            <div class="row d-flex justify-content-center">
                <div class="col col-md-4 col-sm-8 d-flex flex-column px-3">
                    <?=$this->session->flashdata('pesan')?>
                    <div class="mb-3 d-flex justify-content-center">
                        <img src="<?=base_url();?>assets/img/register.png" alt="">
                    </div>
                    <div class="mb-3 fs-18">
                        <div class="row">
                            <div class="col">
                                <label for="firstname" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="firstname" name="firstname">
                            </div>
                            <div class="col">
                                <label for="lastname" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="lastname" name="lastname">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 fs-18">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username">
                    </div>
                    <div class="fs-18">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="fs-18 mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="mb-3 d-flex flex-column">
                        <button class="btn btn-red" type="submit">Register</button>
                    </div>
                    <div class="mb-3 fs-12">
                        By signing in you accept the <a href=""> Terms of Use and acknowledge the Privacy
                            Policy and Cookie Policy. </a>
                    </div>
                    <div class="my-3 text-center fs-12">
                        <p>Don't have Account yet? <a href="<?=base_url();?>Auth">Login</a></p>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
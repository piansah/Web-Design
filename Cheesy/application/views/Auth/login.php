<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$title?></title>
    <link rel="shortcut icon" href="<?=base_url();?>assets/img/logi.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=base_url();?>assets/css/style.css">
</head>

<body>
    <div class="login overflow-hidden d-flex flex-column justify-content-center">
        <form action="<?=base_url();?>Auth/login_validation" method="POST">
            <div class="row d-flex justify-content-center">
                <div class="col col-md-4 col-sm-8 d-flex flex-column px-3">
                    <?=$this->session->flashdata('pesan')?>
                    <div class="mb-3 d-flex justify-content-center">
                        <img src="<?=base_url();?>assets/img/login.png" alt="">
                    </div>
                    <div class="mb-3 fs-18">
                        <label for="exampleFormControlInput1" class="form-label">email</label>
                        <input type="email" class="form-control" id="username" name="email">
                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>');?>
                        <?= form_error('email_check', '<small class="text-danger pl-3">', '</small>');?>
                    </div>
                    <div class="mb-3 fs-18">
                        <label for="exampleFormControlInput1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>');?>
                    </div>
                    <div class="mb-3 d-flex justify-content-between fs-12">
                        <div class="">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Remember Me
                            </label>
                        </div>
                        <p>Forgot your account?</p>
                    </div>
                    <div class="mb-3 d-flex flex-column">
                        <button class="btn btn-red" type="submit">Login</button>
                    </div>
                    <div class="mb-3 fs-12">
                        By signing in you accept the <a href=""> Terms of Use and acknowledge the Privacy
                            Policy and Cookie Policy. </a>
                    </div>
                    <div class="my-3 text-center fs-12">
                        <p>Don't have Account yet? <a href="<?=base_url();?>Auth/register">Register Now</a></p>
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
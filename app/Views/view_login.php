<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>Signin Template · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <style>
        body {
            background-color: #f8f9fa;
        }

        .form-signin {
            width: 100%;
            max-width: 330px;
            padding: 15px;
            margin: auto;
        }

        .form-signin .checkbox {
            font-weight: 400;
        }

        .form-signin .form-floating:focus-within {
            z-index: 2;
        }

        .form-signin input[type="text"],
        .form-signin input[type="password"] {
            direction: ltr;
            margin-bottom: 10px;
        }

        .form-signin input[type="text"]:focus,
        .form-signin input[type="password"]:focus {
            border-color: #007bff;
            box-shadow: 0 0 0 0.25rem rgba(0, 123, 255, 0.25);
        }

        .form-signin input[type="text"],
        .form-signin input[type="password"],
        .form-signin button {
            width: 100%;
            display: block;
            padding: 10px;
            font-size: 16px;
            line-height: 1.5;
            border-radius: 10px;
        }

        .form-signin button {
            background-color: #007bff;
            border: none;
            transition: background-color 0.3s;
        }

        .form-signin button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body class="text-center">

<main class="form-signin">
    <?php if (!empty(session()->getFlashdata('error'))) : ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <?php echo session()->getFlashdata('error'); ?>
        </div>
    <?php endif; ?>
    <form method="post" action="<?= base_url(); ?>/login/process">
        <?= csrf_field(); ?>
        <h1 class="h3 mb-3 fw-normal">Login</h1>
        <input type="text" name="username" id="username" placeholder="Username" class="form-control" required autofocus>
        <input type="password" name="password" id="password" placeholder="Password" class="form-control" required>
        <button type="submit" class="btn btn-lg btn-primary">Login</button>
    </form>
    <div class="text-center mt-3">
            <a href="<?= base_url(); ?>register" class="login-link">apakah sudah ada akun ?</a>
        </div>
    </div>
</main>

</body>

</html>

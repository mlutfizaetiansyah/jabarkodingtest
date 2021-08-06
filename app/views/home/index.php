<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Jekyll v4.0.1">
  <title><?= $data['judul']; ?></title>

  <link rel="stylesheet" href="<?= BASEURL, PORT, LOCATION; ?>/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <!-- Bootstrap core CSS -->

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
  <!-- Custom styles for this template -->
  <link href="<?= BASEURL, PORT, LOCATION; ?>/css/signin.css" rel="stylesheet">
</head>

<body class="text-center">
  <form class="form-signin" action="<?= BASEURL, PORT, LOCATION ?>/Mahasiswa/login" method="post">
    <img class="mb-4" src="<?= BASEURL, PORT, LOCATION; ?>/img/Dais.jpg" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
    <label for="inputEmail" class="sr-only">Username</label>
    <input type="text" class="form-control" placeholder="Username">
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted"> Create By Dais Nurfaizi Novsa <a href="https://getbootstrap.com/">Github</a>, by <a href="https://twitter.com/mdo">@situkangkoding</a> &copy; 2017-2020</p>
  </form>
</body>

</html>
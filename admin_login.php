<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <script src="jquery/jquery-3.6.0.js></script>
    <script src=" js/bootstrap.min.js></script>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/main.css" />

  <title>CBSS BIO_FORM ADMIN LOGIN</title>
</head>

<body class="bg-light">
  <section class="heading container">
    <div>CBSS BIO-DATA ADMIN LOGIN</div>
  </section>
  <main class="container main_class">

    <form class="admin_login form-control" action="check_login.php" method="post">
      <?php
      if (isset($_GET["err_msg"])) echo "<span style='color: red; font-size: 16px; margin-left: 10rem; margin-bottom: 1rem;'>" . $_GET['err_msg'] . " </span>";
      ?>
      <div class="row mb-4">
        <div class="row col-sm-2"></div>
        <label for="inputEmail3" class="col-sm-2 col-form-label">Username:</label>
        <div class="col-sm-6">
          <input type="email" name="username" class="form-control" id="inputEmail3">
        </div>
      </div>
      <div class="row mb-4">
        <div class="row col-sm-2"></div>
        <label for="inputPassword3" class="col-sm-2 col-form-label">Password:</label>
        <div class="col-sm-6">
          <input type="password" name="password" class="form-control" id="inputPassword3">
        </div>
      </div>
      <div class="row mb-4">
        <div class="row col-sm-2"></div>
        <button type="submit" class="btn btn-primary col-sm-1">LOGIN</button>
        <div class="col-sm-6"></div>
      </div>
    </form>
  </main>
  <footer class="container">
    <div>

    </div>
  </footer>
</body>

</html>
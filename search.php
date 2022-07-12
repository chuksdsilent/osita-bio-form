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
  <title>CBSS BIO_FORM search page</title>
</head>

<body class="bg-light">
  <section class="heading container">
    <div class="d-flex justify-content-between">
      <h5>CBSS STAFF SEARCH PAGE</h5>
      <a href="/" class="">Logout</a>
    </div>
  </section>
  <main class="container main_class">
    <form action="detail_page.php" target="_blank" method="POST">
      <div class="input-group">
        <input type="search" class="form-control rounded" name="staff_id" placeholder="Saff Number" id="staff_id" />
        <button type="submit" class="btn  btn-primary">search</button>
      </div>
    </form>
    <h4 class="mt-4">Staff</h4>
    <div id="result">

    </div>
  </main>
  <script src="jquery.js"></script>
  <script type="text/javascript">
    // $(document).ready(function() {
    //   $('#loginform').submit(function(e) {
    //     e.preventDefault();
    //     $.ajax({
    //       type: "POST",
    //       url: 'getUser.php',
    //       data: $(this).serialize(),
    //       success: function(response) {
    //         var jsonData = JSON.parse(response);
    //         const result = `<a href="details.php?id=${jsonData.file_no}">${jsonData.result.inputfirstname} ${jsonData.result.inputothernames}</a>`;
    //         console.log(result)
    //         $("#result").html(result);
    //       }
    //     });
    //   });
    // });
  </script>
</body>

</html>
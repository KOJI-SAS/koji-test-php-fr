<?php
  include('include/header.php');
?>

<body>

  <div class="container my-4">
    <h1>Entrez un nombre entre 0 et 99</h1>
    <form action="/display" class="login-form d-flex align-items-center" role="form" method="post">
      <div class="form-group">
        <label for="number" class="control-label">Nombre entre 0 et 99</label>
        <label for="inputNumber"></label><input type="text" name="number" id="inputNumber" class="col-4" placeholder="votre nombre">
        <button class="btn btn-primary p-2 px-3 m-2" type="submit">
          OK
        </button>
      </div>
    </form>
  </div>
</body>

</html>
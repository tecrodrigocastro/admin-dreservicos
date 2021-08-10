<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/calculadora.css">
    <title>DRE CONTABILIDADE</title>
  </head>
  <body>
    <!-- top navigation bar -->
    <?php
     include('addons/navbar.php');
    ?>
 
    <!-- top navigation bar -->
    <!-- offcanvas -->
    <div
      class="offcanvas offcanvas-start sidebar-nav bg-dark"
      tabindex="-1"
      id="sidebar"
    >
    <?php
     include('addons/sidebar.php');
    ?>
    <!-- offcanvas -->
    <main class="mt-5 pt-3">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 mb-3">
          <div class="calculator card">

<input type="text" class="calculator-screen z-depth-1" value="" disabled />

<div class="calculator-keys">

  <button type="button" class="operator btn btn-info" value="+">+</button>
  <button type="button" class="operator btn btn-info" value="-">-</button>
  <button type="button" class="operator btn btn-info" value="*">&times;</button>
  <button type="button" class="operator btn btn-info" value="/">&divide;</button>

  <button type="button" value="7" class="btn btn-light waves-effect">7</button>
  <button type="button" value="8" class="btn btn-light waves-effect">8</button>
  <button type="button" value="9" class="btn btn-light waves-effect">9</button>


  <button type="button" value="4" class="btn btn-light waves-effect">4</button>
  <button type="button" value="5" class="btn btn-light waves-effect">5</button>
  <button type="button" value="6" class="btn btn-light waves-effect">6</button>


  <button type="button" value="1" class="btn btn-light waves-effect">1</button>
  <button type="button" value="2" class="btn btn-light waves-effect">2</button>
  <button type="button" value="3" class="btn btn-light waves-effect">3</button>


  <button type="button" value="0" class="btn btn-light waves-effect">0</button>
  <button type="button" class="decimal function btn btn-secondary" value=".">.</button>
  <button type="button" class="all-clear function btn btn-danger btn-sm" value="all-clear">AC</button>

  <button type="button" class="equal-sign operator btn btn-default" value="=">=</button>

</div>
</div>
</div>
          </div>
        </div>

      </div>
    </main>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="./js/jquery-3.5.1.js"></script>
    <script src="./js/jquery.dataTables.min.js"></script>
    <script src="./js/dataTables.bootstrap5.min.js"></script>
    <script src="./js/script.js"></script>
    <script type="text/javascript" src="js/calculadora.js"></script>
  </body>
</html>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo ucfirst($_GET["page"]); ?></title>
  <link rel="stylesheet" href="assets/bootstrap.css">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> -->
</head>

<body>

  <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="route.php?page=home" style="color:#0a193d;font-weight:bold;font-size:24px;">Web Developer</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active px-md-5 " aria-current="page" href="route.php?page=home" style="color:#0a193d;font-weight:bold;font-size:18px;">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-md-5" href="route.php?page=skill" style="color:#0a193d;font-weight:bold;font-size:18px;">Skills</a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-md-5 " href="route.php?page=services" style="color:#0a193d;font-weight:bold;font-size:18px;">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-md-5 " href="route.php?page=contact" style="color:#0a193d;font-weight:bold;font-size:18px;">Contact</a>
            </li>
            
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
          <div class="ms-3">
            <?php
            if ("home" == $_GET["page"]) {
            ?>
              <a href="route.php?page=login" class="btn btn-success ">Login</a>
              <a href="route.php?page=registration" class=" btn btn-success">Register</a>

            <?php } ?>
          </div>
        </div>
      </div>
    </nav>
  </header>
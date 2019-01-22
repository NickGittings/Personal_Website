<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Nick Gittings Blog</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  </head>
  <body>

    <script src="script.js" charset="utf-8"></script>

    <nav class="navbar navbar-inverse">

      <div class="container-fluid">

        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynav" name="button">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Home</a>
        </div>

      <div class="collapse navbar-collapse">


      <ul class = "nav navbar-nav">

        <li><a href="index.php?about">About Me</a></li>
        <li><a href="index.php?contact">Contact</a></li>

      </ul>
      </div>
      </div>
    </nav>

    <?php

    if(isset($_GET["about"])){
      include "about.php";
    }

    if(isset($_GET["contact"])){
     include "contact.php";
    }

    ?>

  </body>
</html>

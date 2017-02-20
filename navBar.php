
<?php
session_start();
?>

<nav class="navbar navbar-default" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" > welcome <?php echo $_SESSION['username']; ?></a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
      <li><a href="homePage.php">Home Page</a></li>
    </ul>

    <div class="col-sm-3 col-md-3">
        <form class="navbar-form" role="search">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search" name="q">
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            </div>
        </div>
        </form>
    </div>
    <ul class="nav navbar-nav navbar-right">
     <li class="healthRecords.php"><a href="healthRecords.php">Health Record</a></li>

     <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Medical Request<b class="caret"></b></a>
        <ul class="dropdown-menu">
          
          <li><a href="Department.php">One Stop Request</a></li>

          <li class="divider"></li>
          <li><a href="symptoms.php">Symptoms</a></li>

          <li class="divider"></li>
          <li><a href="#">One more separated link</a></li>
        </ul>
      </li>

      <li><a href="aboutUs.html">About Us</a></li>

      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">User Account<b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="requestRecords.php">My History</a></li>
          <li class="divider"></li>
          <li><a href="logout.php">Log Out</a></li>
        </ul>
      </li>
    </ul>
  </div><!-- /.navbar-collapse -->
</nav>
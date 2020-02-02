<?php if (session_id()=='') {
  session_start();
}
  ?>


<nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-end">
   <!-- Brand -->
   <a class="navbar-brand" href="#">Logo</a>
   <!-- Links -->
   <ul class="navbar-nav">
      <li class="nav-item">
         <a class="nav-link text-white " href="index.php">Home</a>
      </li>
      <?php if (!empty($_SESSION)) { ?>
       <li class="nav-item">
         <a class="nav-link text-white" href="dashboard.php">Dashboard</a>
      </li>
       <li class="nav-item">
         <a class="nav-link text-white" href="lcd-print.php">LCD Print</a>
      </li>
       <li class="nav-item">
         <a class="nav-link text-white" href="logout.php">Logout</a>
      </li>
      <?php }else{ ?>
      <li class="nav-item">
         <a class="nav-link text-white" href="login.php">Login</a>
      </li>
      <li class="nav-item">
         <a class="nav-link text-white" href="signup.php">Signup</a>
      </li>
      <?php } ?>
      <!-- Dropdown -->
      <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle text-white" href="#" id="navbardrop" data-toggle="dropdown">
            More
         </a>
         <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Images</a>
            <a class="dropdown-item" href="#">Slider</a>
            <a class="dropdown-item" href="#">Videos</a>
         </div>
      </li>
   </ul>
   <form class="form-inline" action="/action_page.php">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-success" type="submit">Search</button>
   </form>
</nav>

  
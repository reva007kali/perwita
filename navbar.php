<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Custom CSS -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/mediaquery.css">
  <link rel="stylesheet" href="css/darkmode.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
  <script src="https://unpkg.com/feather-icons"></script>
  <link rel="icon" href="img/logo-pn.png" type="image/png">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

</head>
<body>
      <!-- Navigation Bar Start -->
  <nav id='navbar' class="navbar">
    <label></label>
    <input type='checkbox' id='responsive-menu' onclick='updatemenu()'>
    <div class="navbar-logo">
      <img src="img/logo-pn.png" alt="">
      <h3>Perwita Nusaraya <span>Group</span></h3>
    </div>
    <ul>
      <li><a href='index.php'>Home</a></li>
      <li><a href='about.php'>About</a></li>
      <li><a class='dropdown-arrow'>Units</a>
        <ul class='sub-menus'>
          <li><a href='seabased.php'>Sea Based</a></li>
          <li><a href='landbased.php'>Land Based</a></li>
          <li><a href='training-centers.php'>Training Center</a></li>
          <li><a href='internship.php'>Internship</a></li>
        </ul>
      </li>
      <li><a href='https://seaports.perwitamarine.com/'>Jobs</a></li>
      <li><a href='partner.php'>Partner</a></li>
      <li><a href='gallery.php'>Gallery</a></li>
      <li><a href='faqs.php'>FAQs</a></li>
    </ul>
  </nav>
  <!-- Navigation Bar end -->
</body>
</html>
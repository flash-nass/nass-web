<!DOCTYPE html>
<html>
<meta charset="utf-8" />
<title>HTML 5 complete</title>
<link rel="stylesheet" href="{{URL::asset('/css/reset.css')}}">
<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
<link rel="stylesheet" href="{{URL::asset('/css/style.css')}}">
<body>
<header class="header">
<nav class="#616161 grey darken-2">
  <div class="nav-wrapper">
  <a href="#" class="brand-logo">Logo</a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
      <li><a href="#">Introduce</a></li>
      <li><a href="#">Service</a></li>
      <li><a href="#">Blog</a></li>
      <li><a href="#">Contant</a></li>
      <li><input id="search" type="search" required></li>
    </ul>
  </div>
</nav>
</header>

    <div class"top">
      <img class="materialboxed" width="100%" height="400px"src="{{URL::asset('/img/shinrin.jpg')}}">
    </div>
    <div class="wrapper clearfix">
      <main class="main">
        <p class="bar new">NEW</p>
      </main>

      <div class="sidemenu">
      </div>

      <div class="service">
        <p class="bar b-service">service</p>
      </div>

      <div class="contact">
      </div>
    </div>

    <footer class="footer">
    </footer>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Frontend Suitmedia</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

.site-header {
  background-color: #ff5100;
  color: #fff;
  position: fixed;
  width: 100%;
  top: -80px;
  transition: top 0.3s;
  opacity: 0.9;
  z-index: 1000;
}

.site-header.active {
  top: 0;
}

.site-header nav ul {
  margin: 0;
  padding: 0;
  list-style: none;
  display: flex;
}

.site-header nav ul li {
  margin-right: 20px;
}

.site-header nav ul li a {
  color: #fff;
  text-decoration: none;
}

.content {
  height: 2000px; 
}

  </style>
</head>
<body>
  <header class="site-header">
    <nav>
      <ul>
        <li class="active"><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </nav>
  </header>

  <div class="content">
    <!-- Isi dari halaman -->
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function() {
  var lastScrollTop = 0;
  var delta = 5;
  var siteHeader = $('.site-header');

  $(window).scroll(function(event) {
    var st = $(this).scrollTop();

    if (Math.abs(lastScrollTop - st) <= delta)
      return;

    if (st > lastScrollTop && st > siteHeader.outerHeight()) {
      siteHeader.removeClass('active');
    } else {
      if (st + $(window).height() < $(document).height()) {
        siteHeader.addClass('active');
      }
    }

    lastScrollTop = st;
  });

  var path = window.location.pathname;
  $('.site-header nav ul li').removeClass('active');
  $('.site-header nav ul li a[href="' + path + '"]').parent().addClass('active');
});

  </script>
</body>
</html>

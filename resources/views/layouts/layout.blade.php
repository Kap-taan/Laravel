<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/phosphor-icons"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.0/chart.min.js" integrity="sha512-GMGzUEevhWh8Tc/njS0bDpwgxdCJLQBWG3Z2Ct+JGOpVnEmjvNx6ts4v6A2XJf1HOrtOsfhv3hBKpK9kE5z8AQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- <link rel="stylesheet" href="./css/index.css"> -->
    <link rel="stylesheet" href="{{asset('./css/index.css')}}">
    <link rel="stylesheet" href="{{asset('./css/Contact.css')}}">
    <link rel="stylesheet" href="{{asset('./css/notes.css')}}">
    <link rel="stylesheet" href="{{asset('./css/note.css')}}">
    <title>Notes App</title>
  </head>
  <body>
    <div class="scroll">
      <div id="progressbar"></div>
      <div class="nav">
        <div class="first">
          <h3 class="heading"><a href="/" style="color: var(--headingColor); text-decoration: none;">Notes App</a></h3>
          <div class="lines">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
          </div>
        </div>
        <ul class="navUl none">
          <li><a href="/notes" style="color: var(--textColor); text-decoration: none";>Home</a></li>
          <li><a href="/notes/find" style="color: var(--textColor); text-decoration: none";>Find Notes</a></li>
          <li><a href="/contact" style="color: var(--textColor); text-decoration: none";>Feedback</a></li>
          <li class="login"><a href="/login" style="color: var(--textColor); text-decoration: none";>Login</a></li>
        </ul>
      </div>
      <!-- Content -->

      @yield('content')

      <footer>
        <div class="footer_first">
          <p>&copy;Copyright <strong>Notes App</strong>. All Rights Reserved</p>
          <marquee>Contributed By Parikshit & Harsh</marquee>
        </div>

        <div class="footer_second">
          <a href="#" class="icon"><i class="ph-facebook-logo"></i></a>
          <a href="#" class="icon"><i class="ph-twitter-logo"></i></a>
          <a href="#" class="icon"><i class="ph-instagram-logo"></i></a>
        </div> 
      </footer>


    </div>

    <!-- Scripts -->
    <script src="{{asset('./scripts/colorS.js')}}"></script>
    <script src="{{asset('./scripts/index.js')}}"></script>

  </body>
</html>

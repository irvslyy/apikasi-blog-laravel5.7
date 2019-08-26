    <!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>web</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/56a5f81545.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('js/jquery.js') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:700&display=swap" rel="stylesheet">

</head>

<body>
   
        <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top is-visible navigation-bar">
  <a class="navbar-brand" href="#">IRVS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" data-nav-status="toggle">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Achievment</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('blogs_path')}}">Blog Pribadi</a>
      </li>
   </ul>
    
    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item"><a class="nav-link" href="{{ route('login') }}"> <i class="fas fa-user-circle"></i> Login</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('register') }}"><i class="fas fa-sign-in-alt"></i> Register</a></li>
                        @else
                            <li class="dropdown  drop-left">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu " role="menu">
                                    <li class="nav-item">
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="nav-link">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                    <li class="nav-item">
                                      <a href=""></a>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
      </div>
    </nav>

        <main class="py-4">
            @yield('content')
        </main>

    </div>
</body>



    <footer id="sticky-footer mt-5 off-shadow" class="py-4">
    <div class="container text-center text-foot">
      <small class="text-foot">Design Theme BY IrvsLyy23. All Right Reserved <i class="fas fa-heart"></i></small>
    </div>
  </footer>

<script type="text/javascript">
    $(document).ready(function(){

/** ===========================================
    Hide / show the master navigation menu
============================================ */

  // console.log('Window Height is: ' + $(window).height());
  // console.log('Document Height is: ' + $(document).height());
  
    console.log('Window Height is: ' + $(window).height());
  console.log('Document Height is: ' + $(document).height());

  var previousScroll = 0;

  $(window).scroll(function(){

    var currentScroll = $(this).scrollTop();

    /*
      If the current scroll position is greater than 0 (the top) AND the current scroll position is less than the document height minus the window height (the bottom) run the navigation if/else statement.
    */
    if (currentScroll > 0 && currentScroll < $(document).height() - $(window).height()){
      /*
        If the current scroll is greater than the previous scroll (i.e we're scrolling down the page), hide the nav.
      */
      if (currentScroll > previousScroll){
        window.setTimeout(hideNav, 300);
      /*
        Else we are scrolling up (i.e the previous scroll is greater than the current scroll), so show the nav.
      */
      } else {
        window.setTimeout(showNav, 300);
      }
      /* 
        Set the previous scroll value equal to the current scroll.
      */
      previousScroll = currentScroll;
    }

  });

  function hideNav() {
    $("[data-nav-status='toggle']").removeClass("is-visible").addClass("is-hidden");
  }
  function showNav() {
    $("[data-nav-status='toggle']").removeClass("is-hidden").addClass("is-visible");
  }

});
</script>

</html>





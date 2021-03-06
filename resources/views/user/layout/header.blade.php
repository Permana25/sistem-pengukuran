<nav class="navbar navbar-inverse navbar-static-top">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href=/home><span class="fa fa-home"></span></a>
      </div>
  
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="/about">About</a></li>
          @auth
          <li><a href="/kuisioner">Kuisioner</a></li>
          <li class="pull-right"><a href="/logout" onClick="event.preventDefault();
            document.getElementById('logout-form').submit();">Logout</a></li>
          @else
          <li class="pull-right"><a href="/login">Login</a></li>
          @endauth
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
      </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
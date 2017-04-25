<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ url('/') }}">Go Rewards</a>
     {{--  <a class="navbar-brand" href="{{ url('/') }}">
        <img alt="Brand" src="{{ url('public/img/logo.png') }}">
      </a> --}}
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="#">Rewards</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Management <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Employees</a></li>
            <li><a href="#">BU CODE</a></li>
            <li><a href="#">Award</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Reward Planning</a></li>
            <li><a href="#">Lucky List</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
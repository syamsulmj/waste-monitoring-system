<nav class="navbar navbar-expand-lg navbar-dark bg-dark customed-navbar">
  <a class="navbar-brand navbar-title-style" href="/">Waste Monitoring System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      @if (url()->current() == action('HomeController@index'))
        <li class="nav-item active">
      @else
        <li class="nav-item">
      @endif
        <a class="nav-link" href="/">Home</a>
      </li>
      @if (url()->current() == action('DataController@index'))
        <li class="nav-item active">
      @else
        <li class="nav-item">
      @endif
        <a class="nav-link" href="{{ action('DataController@index') }}">Add New Dust Bin</a>
      </li>
    </ul>
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="{{ action('HomeController@logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
        <form id="logout-form" method="post" action="{{ action('HomeController@logout') }}" style="display: none;">
          {{ csrf_field() }}
        </form>
      </li>
    </ul>
  </div>
</nav>

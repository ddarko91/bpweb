<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/">
        @if (isset($page))
            <b>BP</b>Web - {{$page->title}}
        @else
            <b>BP</b>Web
        @endif
    </a>
  
    <div class="collapse navbar-collapse" id="navbarColor02">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about">About</a>
        </li>
        
      </ul>
    </div>
  </nav>
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: pink; color:black;">
  <div class="container">
    <a class="navbar-brand" href="http://localhost/myprojek/public/" style="color:black;">ACCIO WRITER HOUSE</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ ($title === 'Home') ? 'active' : '' }}" href="home" style="color:black;">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === 'About') ? 'active' : '' }}" href="about" style="color:black;">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === 'Blog') ? 'active' : '' }} " href="posts" style="color:black;">Blog</a>
        </li>
      </ul>

      <ul class='navbar-nav ms-auto'>
        @auth
        <li class="nav-item dropdown">
          <a style="color:black;" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Welcome back, {{ auth()->user()->name }}
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="dashboard"><i class="bi bi-clipboard"></i>Dashboard</a>
            <li><hr class="dropdown-divider"></li>
            <li>
            <form action="login" method="post">
            @csrf
              <button type="submit" class="dropdown-item"><i class="bi bi-arrow-left-square-fill"></i>Logout</li></button>
            </form> 
          </ul>
        </li>
        @else
        <li class='nav-item'>
          <a href='http://localhost/myprojek/public/' class="nav-link {{ ($title === 'Login') ? 'active' : '' }}"><i class="bi bi-arrow-right-square-fill"></i>Login</a>
        </li>
        @endauth
      </ul>
    </div>
  </div>
</nav>
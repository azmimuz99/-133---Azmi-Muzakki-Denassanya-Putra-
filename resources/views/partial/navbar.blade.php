<nav class="navbar navbar-expand-lg bg-dark navbar-dark text-white">
  <div class="container mt-4">
    <a class="navbar-brand" href="/">
      <img src="{{ URL('images/logoedu.png') }}" alt="EduLedge" style="width: 100px; height: 100px;">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link{{ ($title === "Home") ? ' active' : '' }}" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link{{ ($title === "Course") ? ' active' : '' }}" href="/course">Course</a>
        </li>
        <li class="nav-item">
          <a class="nav-link{{ ($title === "Category") ? ' active' : '' }}" href="/categories">Category</a>
        </li>
        <li class="nav-item">
          <a class="nav-link{{ ($title === "About") ? ' active' : '' }}" href="/about">About</a>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right"> <!-- Utilizing ms-auto class here -->
      @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Welcome back, {{ auth()->user()->name }}
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/dashboard">My Dashboard</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <form action="/logout" method="post">
                @csrf
                <button type="submit" class="dropdown-item"><i class="bi bi-arrow-bar-left"></i>Logout</button>
              </form>
            </li>
          </ul>
        </li>
      @else
        <li class="navbar-item">
          <a href="/login" class="nav-link{{ ($title === "Login") ? ' active' : '' }}"><i class="bi bi-arrow-bar-right"></i>
          Login</a>
        </li>
      @endauth
      </ul>
    </div>
  </div>
</nav>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    @vite(['resources/sass/home.scss', 'resources/js/app.js'])
    
</head>
<body>
    <header>
        <div class="px-3 py-2 text-bg-dark">
          <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
              <a href="/" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
                <img class="mb-4" src="{{ asset('images/LOGO_GYM.png') }}" alt="" width="50%" height="10%">
              </a>
              <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
                <li>
                  <a href="#" class="nav-link text-white">
                    <i class="bi-person" style="font-size: 2rem; color: white;"></i>
                  </a>
                </li>
                <li>
                  <a href="#" class="nav-link text-white">
                    <i class="bi-calendar-plus" style="font-size: 2rem; color: white;"></i>
                  </a>
                </li>
                <li>
                  <a href="#" class="nav-link text-white">
                    <i class="bi-clock-history" style="font-size: 2rem; color: white;"></i>
                  </a>
                </li>
                <li class="nav-item dropdown">
                    <button class="btn dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi-list-ul" style="font-size: 2rem; color: white;"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-dark">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                    </ul>
                  </li>          
              </ul>
            </div>
          </div>
        </div>
        <div class="px-3 py-2 border-bottom mb-3">
          <div class="container d-flex flex-wrap justify-content-center">
            <form class="col-12 col-lg-auto mb-2 mb-lg-0 me-lg-auto" role="search">
              <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
            </form>
    
            <div class="text-end">
              <button type="button" class="btn btn-light text-dark me-2">Login</button>
              <button type="button" class="btn btn-primary">Sign-up</button>
            </div>
          </div>
        </div>
      </header>
    <main>
        @yield('content')
        {{-- @if ()
            @yield('content-user')
        @else
            @yield('content-admin')
        @endif --}}
    </main>
    </html>
</body>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
  @if ((Auth::user()->isAdmin)==0)
  <header>
      <div class="px-3 py-2 text-bg-dark">
          <div class="container">
              <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                  <a href="/" class="d-flex align-items-center me-lg-auto text-white text-decoration-none"
                      style="max-width: 20%; max-height: 3rem;">
                      <img class="mb-4" src="{{ asset('images/LOGO_GYM.png') }}" alt="Imagen del logo"
                          style="width: 100%; max-height: 4rem;">
                  </a>
                  <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
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
                              <li><a class="dropdown-item" href="#">Política de privacidad</a></li>
                              <li><a class="dropdown-item" href="#">Cerrar Sesión</a></li>
                          </ul>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
  </header>
  @else
  <header>
    <div class="px-3 py-2 text-bg-dark">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center me-lg-auto text-white text-decoration-none"
                    style="max-width: 20%; max-height: 3rem;">
                    <img class="mb-4" src="{{ asset('images/LOGO_GYM.png') }}" alt="Imagen del logo"
                        style="width: 100%; max-height: 4rem;">
                </a>
                <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
                    <li>
                        <a href="#" class="nav-link text-white align-text-center">
                            <i class="bi-person-rolodex" style="font-size: 2rem; color: white;"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link text-white">
                            <i class="bi-calendar-week" placeholder="Citas" style="font-size: 2rem; color: white;"></i>
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
                            <li><a class="dropdown-item" href="#">Política de privacidad</a></li>
                            <li><a class="dropdown-item" href="#">Cerrar Sesión</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
  </header>
  @endif
    <main>
        @yield('content')
    </main>
    <footer class="p-auto m-auto justify-content-center" style="height: 100px; bottom: 0; width: 100%;">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3"></ul>
        <p class="text-center text-body-secondary">Horario de atención de 8 am a 4 pm horario del centro de México. |
            soporte@krachtigym.mx | +52 998 187 8753</p>
    </footer>

</html>
</body>

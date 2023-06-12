<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Andrea Larroza</title>
    @vite(['resources/sass/app.scss', 'resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gradient">
  <main>
    <section class="py-5">
      <div class="container">
        <div class="row gy-4 justify-content-center">
          <div class="col-md-3">
            <div class="ratio ratio-1x1 mx-auto w-75">
              <picture>
                <source srcset="{{asset('assets_front/img/me.webp')}}" type="image/webp">
                <img src="{{asset('assets_front/img/me.jpeg')}}" alt="Andrea Larroza" class="object-fit-cover rounded-circle w-100" >
              </picture>
            </div>
          </div>
          <div class="col-md-6 d-flex flex-column justify-content-center">
            <h1 class="fw-bold text-primary">¡Hola!</h1>
            <p class="lead text-primary">Soy Andrea Larroza, soy desarrolladora front-end con más de 4 años de experiencia en el diseño, desarrollo y mantenimiento de interfaces web.</p>
            <ul class="column-gap-3 column-gap-lg-0 flex-row flex-wrap navbar-nav text-primary">
              <li class="nav-item">
                <a href="https://www.linkedin.com/in/andrea-larroza" target="_blank" rel="noreferrer" class="nav-link py-2 px-0 px-lg-2 fs-5" aria-label="LinkedIn">
                  <i class="bi bi-linkedin"></i>
                </a>
              </li> 
              <li class="nav-item">
                <a href="https://github.com/andrealarroza" target="_blank" rel="noreferrer" class="nav-link py-2 px-0 px-lg-2 fs-5" aria-label="GitHub">
                  <i class="bi bi-github"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section class="py-5">
      <div class="container">
        <h2 class="display-5 fw-bold mb-5 text-center text-primary">Proyectos</h2>
        <div class="row gy-4">      
          @foreach ($proyectos as $proyecto)
          <div class="col-md-4">
            <div class="card h-100 border-white shadow-sm">
              <div class="card-body d-flex flex-column align-items-start justify-content-between">
                <div class="w-100">
                  <div class="align-content-center d-flex justify-content-between">
                    <h3 class="mb-0">{{ $proyecto->title }}</h3>
                    <span class="fw-light h5 mb-0 lh-base">{{ $proyecto->year }}</span>
                  </div>
                  <span class="fw-medium text-primary">{{ $proyecto->made }}</span>
                  <p class="card-text text-body-secondary mt-3">{{ $proyecto->description }}</p>

                </div>
                <div class="w-100">
                  <div class="d-flex flex-wrap gap-1 my-4">
                    @foreach ($proyecto->badges as $badge)
                    <span class="bg-secondary-subtle px-2 rounded-3 small text-secondary lh-lg fw-medium">{{ $badge }}</span>
                    @endforeach
                  </div>
                  @if ($proyecto->github == null)
                  @else
                    @if ($proyecto->github == 'privado')
                      <a href="" class="btn btn-primary disabled"><i class="bi bi-code-slash me-2"></i>Privado</a>
                    @else
                      <a href="{{ $proyecto->github }}" class="btn btn-primary" target="_blank" rel="noreferrer"><i class="bi bi-github me-2"></i>GitHub</a>
                    @endif
                  @endif
                  <a href="{{ $proyecto->link }}" class="btn btn-primary" target="_blank" rel="noreferrer" aria-label="Enlace a {{ $proyecto->title }}"><i class="bi bi-box-arrow-up-right me-2"></i>Link</a>
                </div>
              </div>
            </div>
          </div>   
          @endforeach
        </div>
      </div>
    </section>
  </main>
  <footer class="py-4">
    <div class="container text-center">
      <ul class="column-gap-3 column-gap-lg-0 flex-row flex-wrap navbar-nav justify-content-center text-primary">
        <li class="nav-item">
          <a href="https://www.linkedin.com/in/andrea-larroza" target="_blank" rel="noreferrer" class="nav-link py-2 px-0 px-lg-2 fs-5" aria-label="LinkedIn">
            <i class="bi bi-linkedin"></i>
          </a>
        </li> 
        <li class="nav-item">
          <a href="https://github.com/andrealarroza" target="_blank" rel="noreferrer" class="nav-link py-2 px-0 px-lg-2 fs-5" aria-label="GitHub">
            <i class="bi bi-github"></i>
          </a>
        </li>
      </ul>
      <a href="https://github.com/andrealarroza/portfolio" target="_blank" rel="noreferrer" class="btn btn-link text-decoration-none text-primary">Diseñado y desarrollado por: Andrea Larroza © 2023</a>
    </div>
  </footer>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

@include('layouts.profil.header')

<body class="d-flex flex-column h-100">
  <main class="flex-shrink-0">
      <!-- Navigation-->
      <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
          <div class="container px-5">
              <a class="navbar-brand" href=""><span class="fw-bolder text-primary">Profil</span></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                      <li class="nav-item"><a class="nav-link" href="{{ route('beranda.index') }}">KEMBALI</a></li>
                  </ul>
              </div>
          </div>
      </nav>
      @yield('content')
  </main>
  <!-- Footer-->
  <footer class="bg-white py-4 mt-auto">
      <div class="container px-5">
          <div class="row align-items-center justify-content-between flex-column flex-sm-row">
              <div class="col-auto"><div class="small m-0">Copyright &copy; Your Website 2023</div></div>
              <div class="col-auto">
                  <a class="small" href="#!">Privacy</a>
                  <span class="mx-1">&middot;</span>
                  <a class="small" href="#!">Terms</a>
                  <span class="mx-1">&middot;</span>
                  <a class="small" href="#!">Contact</a>
              </div>
          </div>
      </div>
  </footer>

  @include('layouts.profil.javascript')
</body>

</html>
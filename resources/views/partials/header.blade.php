<header class="header-area">
    <div class="top-header-area">
      <div class="container h-100">
        <div class="row h-100 align-items-center">
          <div class="col-6 col-md-9 col-lg-8">
            <div class="top-header-content">
              <a href="https://maps.app.goo.gl/9wLbtu8cAos7qYXT9" data-toggle="tooltip" data-placement="bottom" title="Jl. Adi Sucipto No.33, Manahan, Kec. Banjarsari, Kota Surakarta, Jawa Tengah"><i class="fa fa-map-marker"></i> <span>Jl. Adi Sucipto No.33, Manahan, Kec. Banjarsari, Kota Surakarta, Jawa Tengah 57139</span></a>
              <a data-toggle="tooltip" data-placement="bottom" title="mpk.smk2ska@gmail.com"><i class="fa fa-envelope"></i> <span>mpk.smk2ska@gmail.com</span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="main-header-area">
      <div class="classy-nav-container breakpoint-off">
        <div class="container">
          <nav class="classy-navbar justify-content-between" id="dentoNav">

            <div class="classy-navbar-toggler">
              <span class="navbarToggler"><span></span><span></span><span></span></span>
            </div>

            <div class="classy-menu">

              <div class="classycloseIcon">
                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
              </div>

              <div class="classynav">
                <ul id="nav">
                  <li><a class="nav-link {{ ($title === "E-ASKADUTA | Dashboard") ? 'active' : '' }}" href='/'>Dashboard</a></li>
                  <li><a class="nav-link {{ ($title === "E-ASKADUTA | Tentang Kami") ? 'active' : '' }}" href='/tentang'>Tentang kami</a></li>
                  {{-- <li><a class="nav-link {{ ($title === "E-ASKADUTA | FORMASI") ? 'active' : '' }}" href='/formasi'>Formasi</a></li> --}}
                  <li><a class="nav-link {{ ($title === "E-ASKADUTA | FORMASI") ? 'active' : '' }}" href='/oops'>Formasi</a></li>
                  <li><a>Respon Aspirasi</a>
                        <ul class="dropdown">
                          <li><a class="nav-link {{ ($title === "E-ASKADUTA | Respon Aspirasi 2023") ? 'active' : '' }}" href='/respon2023'>- ASKADUTA | 2023</a>
                            <ul class="dropdown">
                              <li><a class="nav-link {{ ($title === "E-ASKADUTA | Respon WKS 1") ? 'active' : '' }}" href='/kurikulum2023'>- WKS 1 Bid. Kurikulum</a></li>
                              <li><a class="nav-link {{ ($title === "E-ASKADUTA | Respon WKS 2") ? 'active' : '' }}" href='/kesiswaan2023'>- WKS 2 Bid. Kesiswaan</a></li>
                              <li><a class="nav-link {{ ($title === "E-ASKADUTA | Respon WKS 3") ? 'active' : '' }}" href='/sarpras2023'>- WKS 3 Bid. Sarpras</a></li>
                              <li><a class="nav-link {{ ($title === "E-ASKADUTA | Respon WKS 4") ? 'active' : '' }}" href='/humas2023'>- WKS 4 Bid. Humas</a></li>
                              <li><a class="nav-link {{ ($title === "E-ASKADUTA | Respon KTU") ? 'active' : '' }}" href='/ktu2023'>- Kepala Tata Usaha</a></li>
                              <li><a class="nav-link {{ ($title === "E-ASKADUTA | Respon Bendahara Sekolah") ? 'active' : '' }}" href='/bendahara2023'>- Bendahara Sekolah</a></li>
                              <li><a class="nav-link {{ ($title === "E-ASKADUTA | Respon Tim IT") ? 'active' : '' }}" href='/it2023'>- Koord. IT</a></li>
                              <li><a class="nav-link {{ ($title === "E-ASKADUTA | Respon OSIS") ? 'active' : '' }}" href='/osis2023'>- OSIS</a></li>
                              <li><a class="nav-link {{ ($title === "E-ASKADUTA | Respon PMR") ? 'active' : '' }}" href='/pmr2023'>- Palang Merah Remaja</a></li>
                            </ul>
                          </li>
                          <li><a class="nav-link {{ ($title === "E-ASKADUTA | Respon Aspirasi 2024") ? 'active' : '' }}" href='/respon2024'>- ASKADUTA | 2024</a>
                            <ul class="dropdown">
                              <li><a class="nav-link {{ ($title === "E-ASKADUTA | FORASI") ? 'active' : '' }}" href='/forasi'>- FORASI</a></li>
                              <li><a class="nav-link {{ ($title === "E-ASKADUTA | eFORASI") ? 'active' : '' }}" href='/eforasi'>- E-FORASI</a></li>
                            </ul>
                          </li>
                          <li><a href="/oops">- ASKADUTA | 2025</a>
                            <ul class="dropdown">
                              <li><a>- Coming Soon</a></li>
                            </ul>
                          </li>
                        </ul>
                    </li>
                    @auth
                      <li><a>Selengkapnya</a>
                        <ul class="dropdown">
                          {{-- <li><a href='/aspirasisaya'>- Aspirasi Saya</a></li> --}}
                          <li><a href='/oops'>- Aspirasi Saya</a></li>
                          <li>
                            <form action="{{ route('logout') }}" method="POST">
                              @csrf
                              <button type="submit" style="border: none;" class="dropdown-item{{ ($title === 'E-ASKADUTA | Login') ? 'active' : '' }}"><i class="bi bi-box-arrow-right ml-30"></i> Logout</button>
                            </form>
                          </li>
                        </ul>
                    @else
                      <li>
                        <form action="{{ route('login') }}" method="GeT">
                          @csrf
                          <button type="submit" style="border: none;" class="nav-link {{ ($title === 'E-ASKADUTA | Login') ? 'active' : '' }}"><i class="bi bi-box-arrow-in-right"></i> Login</button>
                        </form>
                      </li>
                    @endauth
                </ul>
              </div>
            </div>

            <div class="header-image">
                <img src="/img/core-img/logo-web.png" alt="Small Logo">
            </div>

          </nav>
        </div>
      </div>
    </div>
   
  </header>
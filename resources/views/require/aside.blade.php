
  <!-- ======= Mobile nav toggle button ======= -->
  <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex flex-column justify-content-center">

    <nav id="navbar" class="navbar nav-menu">
      <ul>
        <li><a href="{{ route('dashboard') }}" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>ACCUEIL</span></a></li>
        <li><a href="{{ route('gestion_client.index') }}" class="nav-link scrollto"><i class="bx bx-user"></i> <span>CLIENT</span></a></li>
        <li><a href="{{ route('gestion_mesure.index') }}" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>MESURES</span></a></li>
        <li><a href="{{ route('gestion_paiement.index') }}" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>PAIEMENT</span></a></li>
        <li><a href="{{ route('gestion_modele.index') }}" class="nav-link scrollto"><i class="bx bx-server"></i> <span>MODELES</span></a></li>
        <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>CONTACTS</span></a></li>
      </ul>
    </nav><!-- .nav-menu -->

  </header><!-- End Header -->

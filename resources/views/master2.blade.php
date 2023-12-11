<!DOCTYPE html>
<html lang="en">
<head>
  <title> @yield('judulhalaman') </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <!-- Brand -->
        <a class="navbar-brand" href="#">5026221027 Ahmad Nabil</a>

        <!-- Links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="/pegawai">Data Pegawai</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/nilaikuliah">Nilai Kuliah</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/kaos">Tugas Pra EAS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/keranjangbelanja">Keranjang Belanja</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/karyawan">Karyawan</a>
          </li>

          <!-- Dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
              DATABASE
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="/pegawai">Pegawai</a>
              <a class="dropdown-item" href="/nilaikuliah">Nilai Kuliah</a>
              <a class="dropdown-item" href="/kaos">Tugas Pra UAS</a>
              <a class="dropdown-item" href="/keranjangbelanja">Keranjang Belanja</a>
              <a class="dropdown-item" href="/karyawan">Karyawan</a>
            </div>
          </li>
        </ul>
      </nav>
<div class="container">

    @yield('konten')

    @include('footer')
</div>
</body>
</html>

<aside class="main-sidebar sidebar-dark-primary elevation-4">
 <!-- Brand Logo -->
 <a href="#" class="brand-link">
  <span class="brand-text font-weight-light" style="margin-left: 1rem;"><i class="fas fa-book-reader mr-2"></i>Perpustakaan</span>
 </a>

 <!-- Sidebar -->
 <div class="sidebar">
  <!-- Sidebar user (optional) -->
  <div class="user-panel mt-3 pb-3 mb-3 d-flex">
   <div class="image">
    <img src="{{ asset('') }}dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
   </div>
   <div class="info">
    <a href="#" class="d-block">{{ auth()->user()->name }}</a>
   </div>
  </div>

  <!-- Sidebar Menu -->
  <nav class="mt-2">
   <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    @if (Auth()->user()->status_akun == 'admin')
    <li class="nav-item">
     <a href="{{ route('adminDash') }}" class="nav-link {{ Request::routeIs('adminDash') ? 'active' : '' }}">
      <i class="nav-icon fas fa-tachometer-alt"></i>
      <p>
       Dashboard
      </p>
     </a>
    </li>
    <li class="nav-item">
     <a href="{{ route('Akun.index') }}" class="nav-link {{ Request::routeIs('Akun.*') ? 'active' : '' }}">
      <i class="nav-icon fas fa-users"></i>
      <p>
       Data Akun
      </p>
     </a>
    </li>
    @else
    <li class="nav-item">
     <a href="{{ route('petugasDash') }}" class="nav-link {{ Request::routeIs('petugasDash') ? 'active' : '' }}">
      <i class="nav-icon fas fa-tachometer-alt"></i>
      <p>
       Dashboard
      </p>
     </a>
    </li>
    <li class="nav-item">
     <a href="{{ route('Rak.index') }}" class="nav-link {{ Request::routeIs('Rak.*') ? 'active' : '' }}">
      <i class="nav-icon fas fa-table"></i>
      <p>
       Rak Buku (Kategori)
      </p>
     </a>
    </li>
    <li class="nav-item">
     <a href="{{ route('Buku.index') }}" class="nav-link {{ Request::routeIs('Buku.*') ? 'active' : '' }}">
      <i class="nav-icon fas fa-book"></i>
      <p>
       Data Buku
      </p>
     </a>
    </li>
    <li class="nav-item">
     <a href="{{ route('Peminjaman.index') }}" class="nav-link {{ Request::routeIs('Peminjaman.*') ? 'active' : '' }}">
      <i class="nav-icon fas fa-database"></i>
      <p>
       Data Peminjaman
      </p>
     </a>
    </li>
    <li class="nav-item">
     <a href="{{ route('Pengembalian.index') }}" class="nav-link {{ Request::routeIs('Pengembalian.*') ? 'active' : '' }}">
      <i class="nav-icon fas fa-database"></i>
      <p>
       Data Pengembalian
      </p>
     </a>
    </li>
    @endif
    <li class="nav-item">
     <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
      <i class="nav-icon fas fa-sign-out-alt"></i>
      <p>
       Logout
      </p>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
       @csrf
      </form>
     </a>
    </li>
   </ul>
  </nav>
  <!-- /.sidebar-menu -->
 </div>
 <!-- /.sidebar -->
</aside>

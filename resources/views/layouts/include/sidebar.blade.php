<div class="logo">
    <center>
        <a href="{{route('admin')}}" class="simple-text logo-normal">
        Tracking Covid
        </a>
    </center>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="active ">
        <a href="{{route('admin')}}">
          <i class="nc-icon nc-bank"></i>
          <p>Dashboard</p>
        </a>
      </li>
      <li>
        <a href="{{route('provinsi.index')}}">
          <i class="nc-icon nc-tile-56"></i>
          <p>Provinsi</p>
        </a>
      </li>
      <li>
        <a href="{{route('kota.index')}}">
          <i class="nc-icon nc-tile-56"></i>
          <p>Kota</p>
        </a>
      </li>
      <li>
        <a href="{{route('kecamatan.index')}}">
          <i class="nc-icon nc-tile-56"></i>
          <p>Kecamatan</p>
        </a>
      </li>
      <li>
        <a href="{{route('kelurahan.index')}}">
          <i class="nc-icon nc-tile-56"></i>
          <p>Kelurahan</p>
        </a>
      </li>
      <li>
        <a href="{{route('rw.index')}}">
          <i class="nc-icon nc-tile-56"></i>
          <p>Rw</p>
        </a>
      </li>
      <li>
        <a href="{{route('tracking.index')}}">
          <i class="nc-icon nc-tile-56"></i>
          <p>Tracking</p>
        </a>
      </li>
      <li>
        <a type="button" href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">
          <i class="nc-icon nc-lock-circle-open"></i>
          <p>Logout</p>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
      </li>
    </ul>
  </div>

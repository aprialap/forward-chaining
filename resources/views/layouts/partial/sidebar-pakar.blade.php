<div class="nk-sidebar">           
    <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label">Home</li>
            <li>
                <a class="has-arrow" href="{{route('admin.home')}}" aria-expanded="false">
                    <i class="icon-home menu-icon"></i><span class="nav-text">Home</span>
                </a>
            </li>

            <li>
                <a class="has-arrow" href="" aria-expanded="false">
                    <i class="icon-screen-tablet menu-icon"></i><span class="nav-text">Informasi</span>
                </a>
            </li>

            <li >
                <a class="has-arrow" href="#" aria-expanded="false">
                    <i class="icon-globe menu-icon"></i> <span class="nav-text">Kelola</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('admin.penyakit')}}">Penyakit</a></li>
                    <li><a href="{{route('admin.gejala')}}">Gejala</a></li>
                    <li><a href="">Relasi</a></li>
                </ul>
            </li>

         
            <li>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <i class="icon-info menu-icon"></i><span class="nav-text">Hasil Konsultasi Pasien</span>
                </a>
            </li>
            <li>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <i class="icon-phone menu-icon"></i><span class="nav-text">Tentang Kami</span>
                </a>
            </li>
            <li>
                <a class="has-arrow" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();" aria-expanded="false" >
                    <i class="icon-user menu-icon"></i><span class="nav-text"> {{ __('Logout') }}</span>
                    
                </a>
             

             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                 @csrf
             </form>
            </li>
           
        </ul>
    </div>
</div>
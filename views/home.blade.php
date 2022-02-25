@extends('layouts.home')

@section('container')
<div class="py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
            <img src="assets/app-img/home02.jpg" class="d-block mx-lg-auto img-fluid" alt="Hotel Image 02" width="700" height="500" loading="lazy">
        </div>
        <div class="col-lg-6">
            <h2 class="display-5 fw-bold lh-1 mb-3">Tentang Kami</h2>
            <p class="lead">Lepaskan Diri Anda ke Hotel Hebat. Dikelilingi oleh Keindahan Pegunungan yang Indah , Danau, Dan Sawah menghijau. Nikmati sore yang hangat dengan Berenang dikolam renang dengan pemandangan Matahari yang memukau. KIDS CLUB yang luas menawarkan beragam fasilitas dan kegiatan Anak-Anak yang akan melengkapi kenyamanan Keluarga. Convention Center kami Dilengkapi Pelayan Lengkap dengan ruang konvensi terbesar di Bogor, Mampu mengakomodasi hingga 300 Delegasi. Manfaatkan Ruang penyelenggaraan Konvensi M.I.C.E Ataupun mewujudkan Acara Pernikahan adat yang Mewah.</p>                           
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Daftar</button>
                <button type="button" class="btn btn-outline-secondary btn-lg px-4">Login</button>
            </div>
      </div>
    </div>
</div>

<main class="mt-4">
                <div class="container-fluid">
                    <div class="text-center">
                        <img src="../assets/app-img/home01.jpg" width="1024" class="img-fluid" alt="Hotel Image 01">
                    </div>

                    {{-- Container --}}
                    @yield('container')
                    
                </div>
            </main>
@endsection
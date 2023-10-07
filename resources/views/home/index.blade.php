@extends('layouts.main')

@section('container')
    @if (session()->has('logout'))
    <div class="alert alert-danger" role="alert">
        {{ session('logout') }}
    </div>
    @endif
    <div class="row mt-4">
        <div class="col-md-6 mb-4 d-flex flex-column justify-content-center">
            <div class="col-10">
                <h3 class="text-uppercase">selamat datang di bank sampah!</h3>
                <p class="mt-3">ubah sampah anda menjadi uang sekarang!</p>
                <a href="/sampah" class="btn btn-success">Mulai Sekarang!</a>
            </div>
        </div>
        <div class="col-md-6">
            <img class="img-fluid" src="https://karangsari-kulonprogo.desa.id/desa/upload/artikel/sedang_1607796641_konsep%20bank%20sampah%20sederhana.jpg" alt="sampah">
        </div>
    </div>
    <div class="row my-5">
        <div class="col-md-12">
            <h1 class="text-center text-uppercase">Tentang</h1>
        </div>
        <div class="col-md-6 mt-5">
            <img class="img-fluid" src="https://krakataumedika.com/images/2020/02/26/tabungan-sampah.jpg" alt="gambar-fitur">
        </div>
        <div class="col-md-6 mb-4 d-flex flex-column justify-content-center">
            <div>
                <p>Bank sampah merupakan tempat penukaran berbagai macam sampah menjadi uang, sampah yang dapat ditukar meliputi kertas, plastik, logam, kaca, dll. Kamu juga membantu bumi dalam mengurangi polusi sampah dengan cara di daur ulang. Silahkan buang sampah mu disini dan mendapatkan keuntungan</p>
            </div>
        </div>
    </div>
@endsection
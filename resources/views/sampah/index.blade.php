@extends('layouts.main')

@section('container')
<div class="row mt-4">
    <div class="col-md-4">
        <div class="card">
            <img src="https://static.indiemarket.news/static-content/uploads/2019/06/DIY-kardus-bekas.jpg" class="card-img-top" alt="kardus">
            <div class="card-body">
                <h5 class="card-title">Kardus</h5>
                <p class="card-text">Semua jenis kardus dapat dibuang disini!</p>
                <p class="card-text">Rp. 3.000/Kg</p>
                <a href="/tukar/?s=kardus&h=3000" class="btn btn-primary">Tukar</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTs5PCGWFVu4v2e_J-KrnCMCn5KiUloasCtbw&usqp=CAU" class="card-img-top" alt="logam">
            <div class="card-body">
                <h5 class="card-title">Logam</h5>
                <p class="card-text">Disini masukkan berbagai macam logam seperti kaleng dan apapun yang berbahan dasar logam</p>
                <p class="card-text">Rp. 4.000/Kg</p>
                <a href="/tukar/?s=logam&h=4000" class="btn btn-primary">Tukar</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <img src="https://images-tm.tempo.co/all/2020/01/18/734514/734514_720.jpg" class="card-img-top" alt="plastik">
            <div class="card-body">
                <h5 class="card-title">Plastik</h5>
                <p class="card-text">Kamu bisa masukkan sampah apa saja yang berbahan dasar plastik ( botol, kantung kresek, dll)</p>
                <p class="card-text">Rp. 5.000/Kg</p>
                <a href="/tukar/?s=plastik&h=5000" class="btn btn-primary">Tukar</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQakSE0aNmR6z4-aEnUggOZStM6WK0GebkE2A&usqp=CAU" class="card-img-top" alt="Kaca">
            <div class="card-body">
                <h5 class="card-title">Kaca</h5>
                <p class="card-text">Kaca apapun dapat dibuang disini loh seperti lampu, kaca dirumah mu, dll. Kamu bisa taruh aja yaa</p>
                <p class="card-text">Rp. 2.000/Kg</p>
                <a href="/tukar/?s=kaca&h=2000" class="btn btn-primary">Tukar</a>
            </div>
        </div>
    </div>
</div>    
@endsection
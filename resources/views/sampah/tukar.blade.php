@extends('layouts.main')

@section('container')
    <div class="row mt-4">
        <div class="col">
            <h1 class="text-center text-uppercase">form penukaran sampah</h1>
            <form action="/tukar" method="post">
                @csrf
                <div class="mb-3">
                    <label for="username" class="form-label">username</label>
                    <input type="text" class="form-control" id="username" name="username" value=@if(!auth()->check()) "guest"
                    @else
                    {{ auth()->user()->username }}
                    @endif>
                </div>
                <div class="mb-3">
                    <label for="sampah" class="form-label">Sampah</label>
                    <input type="text" class="form-control" id="sampah" name="nama_sampah" value="{{ $sampah->nama_barang }}">
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">harga /kg</label>
                    <input type="text" class="form-control" id="harga" name="harga" value="{{ $sampah->harga }}">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="berat">Berat</label>
                    <input type="text" class="form-control @error('berat')
                        is-invalid
                    @enderror" id="berat" name="berat">
                    @error('berat')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" for="total">Total</label>
                    <input type="text" class="form-control @error('total')
                    is-invalid
                    @enderror" id="total" name="total">
                    @error('total')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" name="tukar" class="btn btn-primary">Tukar Sekarang!</button>
            </form>
        </div>
    </div>
@endsection
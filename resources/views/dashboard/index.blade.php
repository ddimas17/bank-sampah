@extends('layouts.main')

@section('js')
    <script src="{{ $chart->cdn() }}"></script>
    {{ $chart->script() }}
@endsection

@section('container')
    <div class="row mt-4">
        <div class="col-12">
            <h1>Dashboard</h1>

            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">User</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Berat</th>
                    <th scope="col">Total</th>
                  </tr>
                </thead>
                <tbody>
                
                @foreach ($datas as $data)
                    <tr>
                        <td>{{ $data->username }}</td>
                        <td>{{ $data->nama_sampah }}</td>
                        <td>{{ $data->harga }}</td>
                        <td>{{ $data->berat }}</td>
                        <td>{{ $data->total }}</td>
                    </tr>  
                @endforeach
                </tbody>
              </table>
        </div>
        <div class="col-12">
            {!! $chart->container() !!}
        </div>
    </div>
@endsection
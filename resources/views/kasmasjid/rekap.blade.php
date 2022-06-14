@extends('layouts.master')


@section('main')

<h1>Pemasukan</h1>
<div class="card card-info">

    <div class="card-header">
        <h3>Simple Datatable</h3>
    </div>

    <div class="card-body">
        {{$data->sum('keluar')}}
    </div>

</div>

<section class="section">
    <div class="card">
        <div class="card-header">
            Simple Datatable
        </div>
        <div class="card-body">
            <table class="table table-striped" id="table1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tanggal</th>
                        <th>Uraian</th>
                        <th>Pemasukan</th>
                        <th>Pengeluaran</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $d)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$d->tanggal}}</td>
                        <td>{{$d->uraian}}</td>
                        <td>{{$d->masuk}}</td>
                        <td>{{$d->keluar}}</td>
                       
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>

</section>
@endsection
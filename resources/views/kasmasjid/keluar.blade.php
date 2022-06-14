@extends('layouts.master')
@section('main')



<section class="section">
    <h1>Pengeluaran</h1>
    <div class="card card-info ">
       
        <div class="card-body">
            <table class="table table-striped" id="table1">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Uraian</th>
                        <th>Pengeluaran</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $d)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$d->tanggal}}</td>
                        <td>{{$d->uraian}}</td>
                        <td>{{$d->keluar}}</td>
                        <td>
                            <span class="badge bg-success">Active</span>
                        </td>
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
</section>

@endsection

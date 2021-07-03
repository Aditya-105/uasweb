@extends('layouts.template')

@section('content')
    <section class="content">
        <div class="inner">
        <button type="button" class="btn-add" data-toggle="modal" data-target="#exampleModal">Tambahkan Data &nbsp;<i class="lnr lnr-plus-circle"></i></button>
        <table class="table">
                <thead>
                    <tr class="bg-dark.bg-gradient">
                    <th>No</th>
                        <th>Nama Paket</th>
                        <th>Foto</th>
                        <th>Keterangan</th>
                        <th>Tgl Buat</th>
                        <th>Tgl Ubah</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($datas as $e=>$item)
                    <tr>
                    <td>{{ $e+1}}</td>
                        <td>{{ $item->nama_paket}}</td>
                        <td><img height=100 src="{{ asset('image/'.$item->foto)}}" alt=""></td>
                        <td>{{ $item->keterangan}}</td>
                        <td>{{ $item->created_at}}</td>
                        <td>{{ $item->updated_at}}</td>
                        <td>
                        <button type="button" class="btn btn-success">EDIT</button>
                        </td>
                        <td>
                            <form action="{{url('')}}" method="post">
                                @csrf
                                @method('DELETE')
                            <button type="button" class="btn btn-danger">DELETE </button>
                            </form>
                            
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>

@endsection    
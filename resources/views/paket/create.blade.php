@extends('layouts.template')

@section('content')
    <form action="" method="POST" enctype="multipart/form-data">
         
        <div class="form-group">
            <label for="namapaket">Nama Paket</label>
            <input type="text" name="namapaket">
        </div>

        <div class="form-group">
            <label for="foto">Foto</label>
            <input type="file" name="foto">
        </div>
       
        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <textarea name="keterangan" cols="30" rows="10"></textarea>
        </div>
    </form>

@endsection

@extends('layout.app')

@section('title')
Item | TopUp Game
@endsection

@section('content')
<h3>Data Kain</h3>
<form action="{{ url('/item/update/'.$item->id_item) }}" method="post">
    @csrf
    @method('put')
    <div class="form-group">
        <label for="nama">Nama Item:</label>
        <input type="text" id="nama" name="nama" value="{{ old('nama', $item->nama_item) }}" required>
    </div>
    <div class="form-group">
        <label for="harga">Harga:</label>
        <input type="number" id="harga" name="harga" value="{{ old('harga', $item->harga_item) }}" required>
    </div>
    <div class="form-group">
        <label for="stok">Stok:</label>
        <input type="number" id="stok" name="stok" value="{{ old('stok', $item->stok) }}" required>
    </div>
    <button class="simpan" type="submit" name="simpan">Tambah Data</button>
</form>
@endsection

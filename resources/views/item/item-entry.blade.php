@extends('layout.app')

@section('title')
Item | TopUp Game
@endsection

@section('content')
<h3>Entry Data Item</h3>
<form action="{{ url('/item/store') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="nama">Nama Item:</label>
        <input type="text" id="nama" name="nama" required>
    </div>
    <div class="form-group">
        <label for="harga">Harga:</label>
        <input type="number" id="harga" name="harga" required>
    </div>
    <div class="form-group">
        <label for="stok">Stok:</label>
        <input type="number" id="stok" name="stok" required>
    </div>
    <button class="simpan" type="submit" name="simpan">Tambah Data</button>
</form>
@endsection

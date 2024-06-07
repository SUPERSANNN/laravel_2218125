@extends('layout.app')

@section('title')
Item | TopUp Game
@endsection

@section('content')
<h3>Data Item</h3>
<a class="tambah" href="/item/tambah">Tambah</a>
<a class="tambah" href="/item/cetak" style="margin-left: 10px;">Cetak</a>
<table class="table-data">
  <thead>
    <tr>
        <th>No</th>
        <th>Nama Item</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($item as $no => $item)
    <tr>
      <td>{{ $no+1 }}</td>
      <td>{{ $item->nama_item }}</td>
      <td>Rp. {{ number_format($item->harga_item) }}</td>
      <td>{{ $item->stok }}</td>
      <td>
        <a class='btn-edit' href="/item/edit/{{ $item->id_item }}">Edit</a>
        |
        <a class='btn-hapus' href="/item/hapus/{{ $item->id_item }}">Hapus</a>
      </td>
    </tr>
    @empty
    <tr>
      <td colspan="5" align="center">Tidak ada data</td>
    </tr>
    @endforelse
  </tbody>
</table>
@endsection

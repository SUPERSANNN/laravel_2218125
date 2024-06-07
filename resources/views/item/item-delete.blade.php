@extends('layout.app')

@section('title')
Item | TopUp Game
@endsection

@section('content')
<h3>Delete Data Item</h3>
<div>
    <h4>Ingin Menghapus Data ?</h4>
    <button type="submit" class="btn-yes" name="hapus">
        <a href={{ url('/item/destroy/' . $item->id_item)}}>Yes</a>
    </button>
    <button type="submit" class="btn-no" name="tidak">
        <a href="/item">No</a>
    </button>
</div>
@endsection

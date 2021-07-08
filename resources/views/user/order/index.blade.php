@extends('user.master')

@section('content')
    <h1>MY ORDER</h1>
    @if (sizeof($data) == 0)
        <h3>BELUM ADA ORDER</h3>
    @endif
    @foreach ($data as $item)
        <ul>
            <li>{{ $loop->iteration }}</li>
            <li>{{ $item->tanggal }}</li>
            <li>{{ $item->jumlah_harga }}</li>
            <li> <a href="{{ route('order.detail', $item->id) }}">Show Details</a></li>
        </ul>
        <hr>
    @endforeach
@endsection

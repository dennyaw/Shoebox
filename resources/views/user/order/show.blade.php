@extends('user.master')

@section('css')
    <style>
        table {
            border-collapse: collapse;
        }

        th,
        td {
            padding: 5px;
            border: 1px solid black;
        }

    </style>
@endsection

@section('content')
    <h1>DETAIL ORDER</h1>
    <h1>TOTAL : {{ $data->jumlah_harga }}</h1>
    <h1>TANGGAL : {{ $data->tanggal }}</h1>

    <table>
        <thead>
            <tr>
                <th>NO</th>
                <th>NAMA</th>
                <th>JUMLAH</th>
                <th>SIZE</th>
                <th>SUBTOTAL HARGA</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data->detail as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->barang->nama_produk }}</td>
                    <td>{{ $item->jumlah }}</td>
                    <td>{{ $item->size_produk }}</td>
                    <td>{{ $item->jumlah_harga }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

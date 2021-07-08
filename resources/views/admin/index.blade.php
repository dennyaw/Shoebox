@extends('admin.layouts.dashboard')
@section('content')
    <div class="container-fluid">
        <!-- table produk baru -->
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Produk Baru</h4>
                        <div class="card-tools">
                            <a href="{{ route('produk.index') }}" class="btn btn-sm btn-primary">
                                More
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode</th>
                                    <th>Nama</th>
                                    <th>Kategori</th>
                                    <th>Qty</th>
                                    <th>Harga</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>PRO-1</td>
                                    <td>White A</td>
                                    <td>Women Sneakers</td>
                                    <td>12</td>
                                    <td>150.000</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>PRO-2</td>
                                    <td>Heels A</td>
                                    <td>Women Heels</td>
                                    <td>20</td>
                                    <td>250.000</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>PRO-3</td>
                                    <td>Run B</td>
                                    <td>Men Sneakers</td>
                                    <td>20</td>
                                    <td>125.000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

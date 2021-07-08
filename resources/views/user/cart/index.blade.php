@extends('user.master')

@section('css')
    <style>
        td {
            border: 1px solid black;
            padding: 5px;
        }

    </style>
@endsection

@section('content')
    <div class="flex-row container">
        <div class="flex-column poppins categories">
            <h1>Coming Soon</h1>
            <!--<div class="flex-column poppins list-categories">
                            <a href="WSneakers.html" class="flex-row">
                                <img src="img/icon/arrow-left.svg">
                                <span>Sneakers</span>
                            </a>
                            <a href="WFlats.html" class="flex-row">
                                <img src="img/icon/arrow-left.svg">
                                <span>Flats</span>
                            </a>
                            <a href="WBoots.html" class="flex-row">
                                <img src="img/icon/arrow-left.svg">
                                <span>Boots</span>
                            </a>
                            <a href="WHeels.html" class="flex-row">
                                <img src="img/icon/arrow-left.svg">
                                <span>Heels</span>
                            </a>
                            <a href="WSlip on.html" class="flex-row">
                                <img src="img/icon/arrow-left.svg">
                                <span>Slip On</span>
                            </a>-->
        </div>
    </div>
    <table>
        <tbody>
            @foreach ($data as $cart)
                <tr>
                    <td>
                        <img src="{{ url('storage/' . $cart->produk->img) }}" alt="">
                    </td>
                    <td>
                        {{ $cart->jumlah }}
                    </td>
                    <td>
                        {{ $cart->size }}
                    </td>
                    <td>
                        OPSI
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <form action="{{ route('checkout') }}" method="post">
        @csrf
        <button type="submit">CHECKOUT</button>
    </form>
    <!--<div class="flex-row list-products">
                        <div onclick="location.href='Boo C.html'" class="flex-column product">
                            <div class="flex-row product-photo">
                                <img src="img/photo/product-2.png" alt="product-2">
                            </div>
                            <div class="flex-column product-detail">
                                <span class="poppins product-name">Boo C</span>
                                <span class="poppins product-price">Rp433.000</span>
                            </div>
                        </div>
                        <div onclick="location.href='Heewls.html'" class="flex-column product">
                            <div class="flex-row product-photo">
                                <img src="img/photo/product-3.png" alt="product-3">
                            </div>
                            <div class="flex-column product-detail">
                                <span class="poppins product-name">Heewls</span>
                                <span class="poppins product-price">Rp647.000</span>
                            </div>
                        </div>
                    </div>-->
    </div>
@endsection

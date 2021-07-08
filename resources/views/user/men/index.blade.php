@extends('user.master')

@section('content')
    <div class="flex-row container">
        <div class="flex-column poppins categories">
            <h1>Categories</h1>
            <div class="flex-column poppins list-categories">
                <a href="{{ route('men.sneakers') }}" class="flex-row">
                    <img src="img/icon/arrow-left.svg">
                    <span>Sneakers</span>
                </a>

                <a href="{{ route('men.boots') }}" class="flex-row">
                    <img src="img/icon/arrow-left.svg">
                    <span>Boots</span>
                </a>
                <a href="{{ route('men.sandals') }}" class="flex-row">
                    <img src="img/icon/arrow-left.svg">
                    <span>Sandals</span>
                </a>

            </div>
        </div>
        <div class="flex-row list-products">
            @forelse($produk as $produk)
                <a href='{{ route('men.show', $produk->id) }}'" class=" flex-column product">
                    <div class="flex-row product-photo">
                        <img src="{{ \Storage::url($produk->foto) }}" alt="{{ $produk->nama_produk }}">
                    </div>
                    <div class="flex-column product-detail">
                        <span class="poppins product-name">{{ $produk->nama_produk }}</span>
                        <span class="poppins product-price">Rp{{ number_format($produk->harga, 2) }}</span>
                    </div>
                </a>
            @empty
                <p class="poppins flex-row">
                    Coming Soon
                </p>

            @endforelse
        </div>
    </div>
    <br>
@endsection

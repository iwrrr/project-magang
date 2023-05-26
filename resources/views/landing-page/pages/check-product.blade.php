@extends('landing-page.template.main')

@section('content')
    <!-- ======= Blog Section ======= -->
    <section class="inner-page mt-5">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Cek Produk</h2>
            </div>

            <div class="table-responsive">
                @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session('failed'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('failed') }}
                    </div>
                @endif
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col" width="60%" class="text-center">Produk</th>
                            <th scope="col" class="text-center">Stok</th>
                            <th scope="col">Harga (Satuan)</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($products as $product)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{!! $product->product_name !!}</td>
                                <td class="text-center">{!! number_format($product->product_stock) !!}</td>
                                <td>Rp {!! number_format($product->product_price) !!}</td>
                                @auth
                                    <td>
                                        <a style="cursor: pointer" data-bs-toggle="modal" data-bs-target="#editProduct" class="btn btn-primary btn-sm" data-product="{{ $product->id }}">Edit</a>
                                        <button type="button" class="btn btn-danger btn-sm">Hapus</button>
                                    </td>
                                @endauth
                            </tr>
                        @empty
                            <tr>
                                <td colspan="{{ auth()->check() ? '5' : '4' }}" class="text-center">Produk tidak tersedia
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                {{ $products->links() }}
            </div>

        </div>
    </section>
    <!-- End Inner Page -->
    
    @include('landing-page.components.modal-edit-product')

@endsection

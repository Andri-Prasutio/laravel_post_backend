@extends('layouts.app')

@section('title', 'Products')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush
@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Products</h1>
                <div class="section-header-button">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add_product">
                        Add New
                    </button>
                </div>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Products</a></div>
                    <div class="breadcrumb-item"><a href="#">Products</a></div>
                    <div class="breadcrumb-item"><a href="{{ route('product.index') }}"> All Products</a></div>
                </div>
            </div>
            <div class="section-body">
                <h2 class="section-title">Products</h2>
                <p class="section-lead">
                    You can manage all Products, such as editing, deleting and more.
                </p>
                <div class="row" id="myRow" style="opacity: 0; display: block; transition: opacity 4s ease-out;">
                    <div class="col-3">
                        @include('layouts.alert')
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>All Users</h4>
                            </div>
                            <div class="card-body">
                                <div class="float-left">
                                    <select class="form-control selectric">
                                        <option>Action For Selected</option>
                                        <option>Move to Draft</option>
                                        <option>Move to Pending</option>
                                        <option>Delete Pemanently</option>
                                    </select>
                                </div>
                                <div class="float-right">
                                    <form action="{{ route('product.index') }}">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search" name="name">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="clearfix mb-3"></div>
                                <div class="table-responsive">
                                    <table class="table-striped table table-hover table-md">
                                        <tr>
                                            <th>Name</th>
                                            <th>Category</th>
                                            <th>price</th>
                                            <th>Photo</th>
                                            <th>Stock</th>
                                            <th>Created At</th>
                                            <th>Action</th>
                                        </tr>
                                        @foreach ($products as $product)
                                            <tr>
                                                <td>{{ $product->name }}</td>
                                                <td>{{ $product->category }}</td>
                                                <td>{{ $product->price }}</td>
                                                <td>
                                                    @if ($product->image)
                                                        <img src="{{ asset('storage/products/' . $product->image) }}"
                                                            alt="Product Image" style="width: 100px; height: auto;">
                                                    @else
                                                        <span class="badge badge-danger">No Image</span>
                                                    @endif
                                                </td>

                                                <td>{{ $product->stock }}</td>
                                                <td>{{ $product->created_at }}</td>
                                                <td>
                                                    <div class="d-flex justify-content-center">
                                                        <a href="{{ route('product.edit', $product->id) }}"
                                                            class="btn btn-sm btn-primary">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                        <form action="{{ route('product.destroy', $product->id) }}"
                                                            method="POST" class="ml-2">
                                                            <input type="hidden" name="_method" value="DELETE">
                                                            <input type="hidden" name="_token"
                                                                value="{{ csrf_token() }}">
                                                            <button class="btn btn-sm btn-danger btn-icon confirm-delete">
                                                                <i class="fas fa-trash"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                    {{--
                                                    <button class="btn btn-sm btn-primary" id="btn_edit" data-id='.{{ $user->id }}.'
                                                        data-user="{{ json_encode($user) }}">
                                                        <i class="fas fa-edit"></i>
                                                    </button> --}}


                                                </td>
                                            </tr>
                                        @endforeach
                                        <tr>

                                        </tr>
                                    </table>
                                </div>
                                <div class="float-right">
                                    {{ $products->withQueryString()->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('layouts.modal_add_product')
        {{--  @include('layouts.modal_edit_product') --}}
    @endsection
    @push('scripts')
        <!-- JS Libraies -->
        <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>

        <!-- Page Specific JS File -->
        <script src="{{ asset('js/page/features-posts.js') }}"></script>
    @endpush

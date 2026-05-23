@extends('layouts.app')

@section('content')

<div class="card border-0 shadow-sm">

    <div class="card-body">

        <!-- TOP -->

        <div class="d-flex justify-content-between align-items-center mb-4">

            <div class="d-flex align-items-center gap-2">

                <a
                    href="/products"
                    class="text-dark text-decoration-none"
                >

                    <i class="bi bi-arrow-left"></i>

                </a>

                <h4 class="fw-bold mb-0">
                    Product Details
                </h4>

            </div>

            <div class="d-flex gap-2">

                <button class="btn btn-outline-secondary">

                    <i class="bi bi-plus-circle"></i>
                    Add Stock

                </button>

                <button
                    type="submit"
                    form="editProductForm"
                    class="btn btn-dark"
                >

                    Save

                </button>

            </div>

        </div>

        <!-- FORM -->

<form
    id="editProductForm"
    method="POST"
    action="/products/{{ $product->id }}"
    enctype="multipart/form-data"
>
            @csrf
            @method('PUT')

            <div class="row">

                <!-- LEFT -->

                <div class="col-md-8">

                    <div class="card border">

                        <div class="card-body">

                            <!-- SKU -->

                            <div class="mb-3">

                                <label class="form-label">
                                    SKU (Stock Keeping Unit)
                                </label>

                                <input
                                    type="text"
                                    class="form-control"
                                    name="sku"
                                    value="{{ $product->sku }}"
                                >

                            </div>

                            <!-- PRODUCT NAME -->

                            <div class="mb-3">

                                <label class="form-label">
                                    Product Name
                                </label>

                                <input
                                    type="text"
                                    class="form-control"
                                    name="name"
                                    value="{{ $product->name }}"
                                >

                            </div>

                            <!-- CATEGORY -->

                            <div class="mb-3">

                                <label class="form-label">
                                    Category
                                </label>

                                <select
                                    name="category"
                                    class="form-select"
                                >

                                    @foreach($categories as $category)

                                        <option
                                            value="{{ $category->id }}"
                                            {{ $product->category_id == $category->id ? 'selected' : '' }}
                                        >

                                            {{ $category->name }}

                                        </option>

                                    @endforeach

                                </select>

                            </div>

                            <!-- STOCK -->

                            <div class="row">

                                <div class="col-md-6 mb-3">

                                    <label class="form-label">
                                        Stock on Hand
                                    </label>

                                    <input
                                        type="number"
                                        class="form-control"
                                        name="stock"
                                        value="{{ $product->stock }}"
                                    >

                                </div>

                                <div class="col-md-6 mb-3">

                                    <label class="form-label">
                                        Low Stock Alert
                                    </label>

                                    <input
                                        type="number"
                                        class="form-control"
                                        name="low_stock"
                                        value="{{ $product->low_stock_alert }}"
                                    >

                                </div>

                            </div>

                            <!-- PRICE -->

                            <div class="row">

                                <div class="col-md-6 mb-3">

                                    <label class="form-label">
                                        Price
                                    </label>

                                    <input
                                        type="number"
                                        step="0.01"
                                        class="form-control"
                                        name="price"
                                        value="{{ $product->price }}"
                                    >

                                </div>

                                <div class="col-md-6 mb-3">

                                    <label class="form-label">
                                        Cost per item
                                    </label>

                                    <input
                                        type="number"
                                        step="0.01"
                                        class="form-control"
                                        name="cost"
                                        value="{{ $product->cost }}"
                                    >

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- RIGHT -->

                <div class="col-md-4">

                    <!-- MEDIA -->

                    <div class="card border mb-3">

                        <div class="card-body">

                            <label class="form-label">
                                Media
                            </label>

                            <div
                                class="border rounded p-3 text-center"
                            >

@if($product->photo)

    <img
        src="{{ asset('storage/' . $product->photo) }}"
        class="img-fluid mb-3"
    >

@endif

<input
    type="file"
    name="photo"
    class="form-control"
>

                            </div>

                        </div>

                    </div>

                    <!-- STATUS -->

                    <div class="card border">

                        <div class="card-body">

                            <label class="form-label">
                                Status
                            </label>

                            <select
                                name="status"
                                class="form-select"
                            >

                                <option
                                    value="active"
                                    {{ $product->status == 'active' ? 'selected' : '' }}
                                >

                                    Active

                                </option>

                                <option
                                    value="inactive"
                                    {{ $product->status == 'inactive' ? 'selected' : '' }}
                                >

                                    Inactive

                                </option>

                            </select>

                        </div>

                    </div>

                </div>

            </div>

        </form>

    </div>

</div>

@endsection
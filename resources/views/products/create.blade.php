@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <h2 class="fw-bold">Add Product</h2>

    <div>
<button type="reset" form="productForm" class="btn btn-secondary">
    Cancel
</button>

<button type="submit" form="productForm" class="btn btn-dark">
    Submit
</button>
    </div>

</div>
<form id="productForm" method="POST" action="/products" enctype="multipart/form-data">

    @csrf

    <div class="row">

        <!-- LEFT -->
        <div class="col-md-8">

            <div class="card border-0 shadow-sm">

                <div class="card-body">

                    <div class="mb-3">
                        <label class="form-label">
                            SKU
                        </label>

                        <input
                            type="text"
                            class="form-control"
                            name="sku"
                            placeholder="Stock Keeping Unit"
                        >
                    </div>

                    <div class="mb-3">
                        <label class="form-label">
                            Product Name
                        </label>

                        <input
                            type="text"
                            class="form-control"
                            name="name"
                            placeholder="Product Name"
                        >
                    </div>

                    <div class="mb-3">

                        <label class="form-label">
                            Category
                        </label>

                        <select
                            name="category"
                            class="form-select"
                        >

                            <option>
                                Select Category
                            </option>

                            @foreach($categories as $category)

                                <option value="{{ $category->id }}">
                                    {{ $category->name }}
                                </option>

                            @endforeach

                        </select>

                    </div>

                    <div class="row">

                        <div class="col-md-6 mb-3">

                            <label class="form-label">
                                Stock on Hand
                            </label>

                            <input
                                type="number"
                                class="form-control"
                                name="stock"
                                placeholder="0"
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
                                placeholder="0"
                            >

                        </div>

                    </div>

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
                                placeholder="0.00"
                            >

                        </div>

                        <div class="col-md-6 mb-3">

                            <label class="form-label">
                                Cost per Item
                            </label>

                            <input
                                type="number"
                                step="0.01"
                                class="form-control"
                                name="cost"
                                placeholder="0.00"
                            >

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- RIGHT -->
        <div class="col-md-4">

            <div class="card border-0 shadow-sm mb-3">

                <div class="card-body">

                    <h5 class="mb-3">
                        Media
                    </h5>

                    <input
                        type="file"
                        class="form-control"
                        name="photo"
                    >

                </div>

            </div>

            <div class="card border-0 shadow-sm">

                <div class="card-body">

                    <h5 class="mb-3">
                        Status
                    </h5>

                    <select
                        name="status"
                        class="form-select"
                    >

                        <option value="active">
                            Active
                        </option>

                        <option value="inactive">
                            Inactive
                        </option>

                    </select>

                </div>

            </div>

        </div>

    </div>

</form>

@endsection
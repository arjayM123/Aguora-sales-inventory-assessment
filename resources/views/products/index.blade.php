@extends('layouts.app')

@section('content')

<div class="card border-0 shadow-sm">

    <div class="card-body">

        <!-- TOP SECTION -->

        <div class="d-flex justify-content-between align-items-center mb-4">

            <h3 class="fw-bold mb-0">
                Product List
            </h3>

            <a
                href="/products/create"
                class="btn btn-dark"
            >

                + Add Product

            </a>

        </div>

        <!-- SEARCH + FILTER -->

        <div class="row mb-4">

            <!-- SEARCH -->

            <div class="col-md-4">

                <input
                    type="text"
                    id="searchInput"
                    class="form-control"
                    placeholder="Search Product"
                >

            </div>

            <!-- FILTER -->

            <div class="col-md-3">

                <select
                    id="statusFilter"
                    class="form-select"
                >

                    <option value="">
                        All Status
                    </option>

                    <option value="active">
                        Active
                    </option>

                    <option value="inactive">
                        Inactive
                    </option>

                </select>

            </div>

        </div>

        <!-- PRODUCT TABLE -->

        <div class="table-responsive">

            <table class="table align-middle">

                <thead class="table-light">

                    <tr>

                        <th>Product</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Status</th>
                        <th>Action</th>

                    </tr>

                </thead>

                <tbody>

                    @forelse($products as $product)

                    <tr
                        class="product-row"
                        data-name="{{ strtolower($product->name) }}"
                        data-status="{{ strtolower($product->status) }}"
                    >

                        <!-- PRODUCT -->

                        <td>

                            <div class="d-flex align-items-center gap-2">

                                <img
                                    src="{{ asset('storage/' . $product->photo) }}"
                                    class="rounded border"
                                >

                                <div>

                                    <div class="fw-semibold">
                                        {{ $product->name }}
                                    </div>

                                    <small class="text-muted">
                                        SKU: {{ $product->sku }}
                                    </small>

                                </div>

                            </div>

                        </td>

                        <!-- CATEGORY -->

                        <td>

                            {{ $product->category_id }}

                        </td>

                        <!-- PRICE -->

                        <td>

                            ₱{{ number_format($product->price, 2) }}

                        </td>

                        <!-- STOCK -->

                        <td>

                            {{ $product->stock }}

                        </td>

                        <!-- STATUS -->

                        <td>

                            @if($product->status == 'active')

                                <span class="badge bg-success">
                                    Active
                                </span>

                            @else

                                <span class="badge bg-danger">
                                    Inactive
                                </span>

                            @endif

                        </td>

                        <!-- ACTION -->

                        <td>

                            <div class="d-flex gap-2">

                                <a
                                    href="/products/{{ $product->id }}/edit"
                                    class="btn btn-sm btn-primary"
                                >

                                    Edit

                                </a>

                                <form
                                    action="/products/{{ $product->id }}"
                                    method="POST"
                                >

                                    @csrf
                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        class="btn btn-sm btn-danger"
                                    >

                                        Delete

                                    </button>

                                </form>

                            </div>

                        </td>

                    </tr>

                    @empty

                    <tr>

                        <td colspan="6" class="text-center">

                            No Products Found

                        </td>

                    </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

<!-- REALTIME SEARCH -->

<script>

document.addEventListener('DOMContentLoaded', function () {

    const searchInput =
        document.getElementById('searchInput');

    const statusFilter =
        document.getElementById('statusFilter');

    const rows =
        document.querySelectorAll('.product-row');

    function filterProducts() {

        const searchValue =
            searchInput.value.toLowerCase();

        const statusValue =
            statusFilter.value.toLowerCase();

        rows.forEach(row => {

            const productName =
                row.dataset.name;

            const productStatus =
                row.dataset.status;

            const matchSearch =
                productName.includes(searchValue);

            const matchStatus =
                statusValue === '' ||
                productStatus === statusValue;

            if (matchSearch && matchStatus) {

                row.style.display = '';

            } else {

                row.style.display = 'none';

            }

        });

    }

    searchInput.addEventListener(
        'keyup',
        filterProducts
    );

    statusFilter.addEventListener(
        'change',
        filterProducts
    );

});

</script>

@endsection
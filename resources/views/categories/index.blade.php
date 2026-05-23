@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <h3 class="fw-bold">
        Category List
    </h3>

    <button
        class="btn btn-dark"
        data-bs-toggle="modal"
        data-bs-target="#categoryModal"
    >
        + Add Category
    </button>

</div>

<div class="card border-0 shadow-sm">

    <div class="card-body">

        <table class="table align-middle">

            <thead>

                <tr>
                    <th>Category</th>
                    <th>Status</th>
                </tr>

            </thead>

            <tbody>

                @foreach($categories as $category)

                <tr>

                    <td>

                        <a
                            href="#"
                            class="text-decoration-none"

                            data-bs-toggle="modal"
                            data-bs-target="#editModal{{ $category->id }}"
                        >

                            {{ $category->name }}

                        </a>

                    </td>

                    <td>

                        @if($category->status == 'active')

                            <span class="badge bg-success">
                                Active
                            </span>

                        @else

                            <span class="badge bg-danger">
                                Inactive
                            </span>

                        @endif

                    </td>

                </tr>

                <!-- EDIT MODAL -->

                <div
                    class="modal fade"
                    id="editModal{{ $category->id }}"
                    tabindex="-1"
                >

                    <div class="modal-dialog">

                        <div class="modal-content">

                            <form
                                method="POST"
                                action="/categories/{{ $category->id }}"
                            >

                                @csrf
                                @method('PUT')

                                <div class="modal-header">

                                    <h5 class="modal-title">
                                        Category Details
                                    </h5>

                                    <button
                                        type="button"
                                        class="btn-close"
                                        data-bs-dismiss="modal"
                                    ></button>

                                </div>

                                <div class="modal-body">

                                    <div class="mb-3">

                                        <label>
                                            Category Name
                                        </label>

                                        <input
                                            type="text"
                                            class="form-control"
                                            name="name"
                                            value="{{ $category->name }}"
                                        >

                                    </div>

                                    <div class="mb-3">

                                        <label>
                                            Status
                                        </label>

                                        <select
                                            class="form-select"
                                            name="status"
                                        >

                                            <option
                                                value="active"

                                                {{ $category->status == 'active' ? 'selected' : '' }}
                                            >
                                                Active
                                            </option>

                                            <option
                                                value="inactive"

                                                {{ $category->status == 'inactive' ? 'selected' : '' }}
                                            >
                                                Inactive
                                            </option>

                                        </select>

                                    </div>

                                </div>

                                <div class="modal-footer">

                                    <button
                                        type="submit"
                                        class="btn btn-primary"
                                    >
                                        Save
                                    </button>

                                </div>

                            </form>

                        </div>

                    </div>

                </div>

                @endforeach

            </tbody>

        </table>

    </div>

</div>

<!-- ADD MODAL -->

<div
    class="modal fade"
    id="categoryModal"
    tabindex="-1"
>

    <div class="modal-dialog">

        <div class="modal-content">

            <form method="POST" action="/categories">

                @csrf

                <div class="modal-header">

                    <h5 class="modal-title">
                        Add Category
                    </h5>

                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                    ></button>

                </div>

                <div class="modal-body">

                    <div class="mb-3">

                        <label>
                            Category Name
                        </label>

                        <input
                            type="text"
                            class="form-control"
                            name="name"
                        >

                    </div>

                    <div class="mb-3">

                        <label>
                            Status
                        </label>

                        <select
                            class="form-select"
                            name="status"
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

                <div class="modal-footer">

                    <button
                        type="submit"
                        class="btn btn-dark"
                    >
                        Save
                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection
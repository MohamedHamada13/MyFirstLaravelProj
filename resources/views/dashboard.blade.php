@extends('layout')
@section('title', 'Dashboard')

@section('nav')
    <x-nav />
@endsection


@section('content')
    <div class="container mt-5">
        <h2 class="text-center mb-4"> Products Dashboard</h2>
        <div class="table-responsive">
            <table class="table table-hover align-middle text-center shadow-sm">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th style="width: 220px;">Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>
                                <img src="{{ asset('images/' . $product->image) }}" width="60" height="60"
                                    class="rounded shadow-sm" alt="{{ $product->title }}">
                            </td>
                            <td class="fw-semibold">
                                {{ $product->title }}
                            </td>
                            <td class="text-success fw-bold">
                                ${{ $product->price }}
                            </td>
                            <td>
                                {{ $product->quantity }}
                            </td>
                            <td>
                                <div class="d-flex justify-content-center gap-2">
                                    <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal"
                                        data-bs-target="#detailsModal" data-id="{{ $product->id }}"
                                        data-title="{{ $product->title }}" data-price="{{ $product->price }}"
                                        data-quantity="{{ $product->quantity }}">
                                        Details
                                    </button>

                                    <button data-bs-toggle="modal" data-bs-target="#editModal"
                                        class="btn btn-sm btn-outline-warning"
                                        onclick='openEditModal(@json($product))'>
                                        Edit
                                    </button>

                                    <button class="btn btn-sm btn-outline-danger" data-bs-toggle="modal"
                                        data-bs-target="#deleteModal" data-id="{{ $product->id }}"
                                        data-title="{{ $product->title }}">
                                        Delete
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-muted py-4">
                                No products found
                            </td>
                        </tr>
                    @endforelse
                </tbody>

            </table>
        </div>

    </div>


    <!-- Details Product Modal -->
    <div class="modal fade" id="detailsModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h5 class="modal-title text-white">Product Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <div class="d-flex justify-content-between">
                        <div class="mb-3">
                            <label>ID</label>
                            <input readonly type="text" id="details_id" class="form-control" value="">
                        </div>
                        <div class="mb-3">
                            <label>Name</label>
                            <input readonly type="text" id="details_title" class="form-control" value="">
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="mb-3">
                            <label>Price</label>
                            <input readonly type="text" id="details_price" class="form-control" value="">
                        </div>
                        <div class="mb-3">
                            <label>Quantity</label>
                            <input readonly type="text" id="details_quantity" class="form-control" value="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Product Modal -->
    <div class="modal fade" id="editModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="" method="POST" id="editForm">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" id="edit_id">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Product</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body">
                        <input type="hidden" id="edit_id" value="">
                        <div class="mb-3">
                            <label>Name</label>
                            <input type="text" name="title" id="edit_title" class="form-control" value="">
                        </div>
                        <div class="mb-3">
                            <label>Price</label>
                            <input type="text" name="price" id="edit_price" class="form-control" value="">
                        </div>
                        <div class="mb-3">
                            <label>Quantity</label>
                            <input type="text" name="quantity" id="edit_quantity" class="form-control" value="">
                        </div>
                    </div>

                    <div class="modal-footer d-flex justify-content-between">
                        <button type="submit" class="btn btn-success w-75">Update</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Delete Product Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="" method="POST" id="deleteForm">
                    @csrf
                    @method('DELETE')
                    <div class="modal-header">
                        <h5 class="modal-title">Delete Product</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body">
                        <input type="hidden" id="delete_id" value="">
                        <p>Are you sure you want to delete the <strong id="delete_title"></strong> product?</p>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger">Delete</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function openEditModal(product) {
            // Fill inputs
            document.getElementById('edit_id').value = product.id;
            document.getElementById('edit_title').value = product.title;
            document.getElementById('edit_price').value = product.price;
            document.getElementById('edit_quantity').value = product.quantity;

            // Set dynamic form action
            document.getElementById('editForm').action = `/products/${product.id}`;
        }
    </script>
@endsection



@section('footer')
    <x-footer />
@endsection

@extends('admin.layouts.master')
@section('page-title',"Products")
@section('main-content')
@php
    $user = session('user');
@endphp
<div class="row">
    <div class="col-md-12">
          <h3 class="mb-3 fw-bold">Add Product</h3>
        <!-- form Here -->
        <form name="" id="productForm" method="">
            @csrf
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="basiInput" class="form-label">Name</label>
                                <input type="text" class="form-control" id="basiInput" name="name" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="basiInput" class="form-label">Select Category</label>
                                <select class="form-control" name="category_id">
                                @if(!empty($categories))
                                @foreach($categories as $cat)
                                <option value="{{$cat->id}}">{{$cat->name}}</option>
                                @endforeach
                                @endif
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="basiInput" class="form-label">In Stock</label>
                                <input type="number" class="form-control" id="basiInput" name="in_stock" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="basiInput" class="form-label">Available</label>
                                <select class="form-control" name="is_available">
                                    <option value="1" selected>Yes</option>
                                    <option value="0">No</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="basiInput" class="form-label">Price</label>
                                <input type="number" class="form-control" id="basiInput" name="price" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="basiInput" class="form-label">Discounted Price</label>
                                <input type="number" class="form-control" id="basiInput" name="discounted_price" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="basiInput" class="form-label">Attachments</label>
                                <input type="file" multiple class="form-control" id="basiInput" name="attachments[]" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="basiInput" class="form-label">Is On Sale</label>
                                <select class="form-control form-select" name="is_on_sale">
                                    <option value="0" selected>No</option>
                                    <option value="1">Yes</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="basiInput" class="form-label">Is Featured</label>
                                <select class="form-control form-select" name="is_featured">
                                    <option value="0" selected>No</option>
                                    <option value="1">Yes</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="basiInput" class="form-label">Description</label>
                                <textarea class="form-control summernote" name="description"></textarea>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row mt-3 mb-3">
                <div class="col-md-6">
                    <button type="button" class="btn btn-primary waves-effect waves-light px-lg-4 py-lg-2" onclick="createProduct(this)">Save</button>
                    <button type="button" class="btn btn-danger bg-gradient waves-effect waves-light px-lg-4 py-lg-2">Cancel</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
@push('scripts')
<script>
function createProduct() {
    let formData = new FormData($('#productForm')[0]);
    axios.post('/admin/save/product', formData, {
        headers: {
            'Authorization': 'Bearer ' + access_token,
        }
    })
    .then(function(response) {
        console.log(response.data)
        if (response.data.status === 'success') {
            Swal.fire({
                icon: 'success',
                title: 'Product Created Successfully',
                showConfirmButton: false,
                timer: 1500,
            }).then(() => {
                window.location.href = "{{route('user.products')}}";
            });
        }
    })
    .catch(function(error) {
            $.each(error.response.data.errors, function(k, v) {
                $('input[name="' + k + '"]').addClass("has-error");
                $('input[name="' + k + '"]').after("<span class='text-danger'>" + v[0] + "</span>");
            });
    });
}


</script>
@endpush

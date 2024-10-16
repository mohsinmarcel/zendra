@extends('admin.layouts.master')
@section('page-title',"Category")
@section('main-content')
@php
    $user = session('user');
@endphp
<div class="row">
    <div class="col-md-12">
          <h3 class="mb-3 fw-bold">Add Category</h3>
        <!-- form Here -->
        <form name="" id="categoryForm" method="">
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
                                <label for="basiInput" class="form-label">Image</label>
                                <input type="file" class="form-control" id="basiInput" name="file" />
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
                    <button type="button" class="btn btn-primary waves-effect waves-light px-lg-4 py-lg-2" onclick="createCategory(this)">Save</button>
                    <button type="button" class="btn btn-danger bg-gradient waves-effect waves-light px-lg-4 py-lg-2">Cancel</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
@push('scripts')
<script>
function createCategory() {
    let formData = new FormData($('#categoryForm')[0]);
    axios.post('/admin/save/category', formData, {
        headers: {
            'Authorization': 'Bearer ' + access_token,
        }
    })
    .then(function(response) {
        console.log(response.data)
        if (response.data.status === 'success') {
            Swal.fire({
                icon: 'success',
                title: 'Category Created Successfully',
                showConfirmButton: false,
                timer: 1500,
            }).then(() => {
                window.location.href = "{{route('user.categories')}}";
            });
        }
    })
    .catch(function(error) {
            $.each(error.response.data.errors, function(k, v) {
                $('input[name="' + k + '"]').addClass("has-error");
                $('input[name="' + k + '"]').after("<span class='text-danger'>" + v[0] + "</span>");
                $('textarea[name="' + k + '"]').addClass("has-error");
                $('textarea[name="' + k + '"]').after("<span class='text-danger'>" + v[0] + "</span>");
            });
    });
}


</script>
@endpush

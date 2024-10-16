@extends('admin.layouts.master')
@section('page-title',"Settings")
@section('main-content')
@php
    $user = session('user');
    $logo = App\Models\Setting::getOption('shop_logo');
    $banner = App\Models\Setting::getOption('banner_image');

@endphp

<div class="row">
    <div class="col-md-12">
          <h3 class="mb-3 fw-bold">Settings</h3>
        <!-- form Here -->
        <form name="" id="settingsForm" method="">
            @csrf
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="basiInput" class="form-label">Upload Banner Image</label>
                                <input class="form-control" type="file" id="formFile" name="banner_image">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <img src="{{asset($banner)}}" style="height: 100px; width:100px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="basiInput" class="form-label">Banner Text</label>
                                <input class="form-control" type="text" name="banner_text"
                                    value="{{ App\Models\Setting::getOption('banner_text') }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="basiInput" class="form-label">Upload Shop Logo</label>
                                <input class="form-control" type="file" id="formFile" name="shop_logo">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <img src="{{asset($logo)}}" style="height: 100px; width:100px;">
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
    let formData = new FormData($('#settingsForm')[0]);
    axios.post('/admin/save/update/settings', formData, {
        headers: {
            'Authorization': 'Bearer ' + access_token,
        }
    })
    .then(function(response) {
        console.log(response.data)
        if (response.data.status === 'success') {
            Swal.fire({
                icon: 'success',
                title: 'Settings Created Successfully',
                showConfirmButton: false,
                timer: 1500,
            }).then(() => {
                window.location.reload();
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

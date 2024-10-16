@extends('admin.layouts.master')
@section('page-title',"Mobiles")
@section('main-content')
@php
    $user = session('user');
@endphp
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-2">Mobile Phones</h5>
                <div class="mt-3">
                    <button type="button" onclick="window.location.href='{{route('user.mobile.create')}}'" class="btn btn-primary btn-label waves-effect waves-light"><i class="ri-edit-line label-icon align-middle fs-16 me-2"></i>Add Mobile Phone</button>
                </div>

            </div>
            <div class="card-body">
                <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%">
                    <thead>
                        <tr>
                            <th scope="col" style="width: 10px;">
                                <div class="form-check">
                                    <input class="form-check-input fs-15" type="checkbox" id="checkAll" value="option">
                                </div>
                            </th>
                            <th data-ordering="false">SR No.</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @if(!empty($mobiles))
                        @foreach ($mobiles as $item)
                        <tr>
                            <th scope="row">
                                <div class="form-check">
                                    <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                </div>
                            </th>
                            <td>{{$item->id}}</td>
                            <td>{{$item->brand}}</td>
                            <td>
                                {{-- <button type="button" onclick="window.location.href='{{route('user.category.update', $item->id)}}'" class="btn btn-primary btn-label waves-effect waves-light">
                                    <i class="ri-edit-line label-icon align-middle fs-16 me-2"></i>Edit
                                </button> --}}
                                <button type="button" onclick="deletePhone('{{$item->id}}')" class="btn btn-danger btn-label waves-effect waves-light"><i class="ri-delete-bin-line label-icon align-middle fs-16 me-2"></i>Delete</button>
                            </td>
                        </tr>
                        @endforeach
                        @endif

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
function deletePhone(id) {
    Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!"
    }).then((result) => {
        if (result.isConfirmed) {
            axios.post(`/admin/delete/mobile/${id}`, {}, {
                headers: {
                    'Authorization': 'Bearer ' + access_token,
                }
            })
            .then(function(response) {
                if (response.data.status === 'success') {
                    Swal.fire({
                        icon: 'success',
                        title: 'Mobile Deleted Successfully',
                        showConfirmButton: false,
                        timer: 1500,
                    }).then(() => {
                        window.location.reload();
                    });
                }
            })
            .catch(function(error) {
                if (error.response && error.response.data && error.response.data.message) {
                    const messages = error.response.data.message;
                    $.each(messages, function(k, v) {
                        $('input[name="' + k + '"]').addClass("has-error");
                        $('input[name="' + k + '"]').after("<span class='text-danger'>" + v[0] + "</span>");
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'An unexpected error occurred. Please try again.',
                    });
                }
            });
        }
    });
}
</script>
@endpush

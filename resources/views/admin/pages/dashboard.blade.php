@extends('admin.layouts.master')
@section('page-title',"Dashboard")
@section('main-content')
@php
    $user = session('user');
    // dd($user);
@endphp
@endsection

@push('scripts')
<script>      
</script>
@endpush

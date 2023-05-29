@extends('layouts.master')

@push('style')
@livewireStyles
@endpush

@push('script')
@livewireScripts
@endpush

@section('content')
<div class="container py-5">
    <h1>Products</h1>
    <hr>
    @livewire('paginate')
</div>
@endsection
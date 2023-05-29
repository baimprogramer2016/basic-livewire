@extends('layouts.master')

@push('style')
@livewireStyles
@endpush
@push('script')
@livewireScripts
@endpush

@section('content')
<div class="container">
    <h1 class='mb-4'>Belajar Crud dengan Livewire</h1>
    <div class="row">
        <div class="col-md-6">
            <livewire:user-create>
        </div>
    </div>
    <div class="row mt-5">
        <livewire:user-table>
    </div>
</div>
@endsection
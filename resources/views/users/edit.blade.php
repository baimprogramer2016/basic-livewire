@extends('layouts.master')

@push('style')
@livewireStyles
@endpush
@push('script')
@livewireScripts
@endpush

@section('content')
<div class="container">
    <h1 class='mb-4'>Edit Data</h1>
    <div class="row">
        <div class="col-md-6">
            {{-- <livewire:user-edit :user='$user'> --}}
                @livewire('user-edit',['user' => $user])
        </div>
    </div>
    <div class="mt-5">
        <a href="{{ route('user-index') }}" class="text-primary mt-5">Back</a>
    </div>

</div>
@endsection
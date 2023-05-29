@extends('layouts.master')

@section('content')
<div class="container">
    <h1 class='mb-4'>Detail User</h1>
    <div class="mb-3">
        <label for="" class="form-label">Nama</label>
        <input type="text" class="form-control" value="{{ $user->name }}" disabled>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Email</label>
        <input type="text" class="form-control" value="{{ $user->email }}" disabled>
    </div>
    <a href="{{ route('user-index') }}" class="text-primary mb-5">Back</a>

</div>
@endsection
@push('style')
@livewireStyles
@endpush

@push('script')
@livewireScripts
@endpush
<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}

    <div class="container py-5">
        <h3>Life Cycle</h3>

        <label for="" class="form-label">Hobi</label>
        <input type="text" class="form-control" wire:model="hobi" placeholder="Hobi">
        <label for="" class="form-label">Warna</label>
        <input type="text" class="form-control" wire:model="warna_kesukaan" placeholder="Warna Kesukaan">
        <div class='mt-3'>
            <div class="text-success fw-bold">Hobi : {{ $hobi }}</div>
            <div class='text-danger fw-bold'>Warna Kesukaan : {{ $warna_kesukaan }}</div>
        </div>
        <div class="row">
            <ul>
                @foreach ($proses as $item)
                <li>{!! $item !!}</li>
                @endforeach
            </ul>
        </div>
    </div>

</div>
<div>
    {{-- Stop trying to control. --}}
    <h5>Table Products</h5>
    <div class="mb-3">
        <div class="row">
            <div class="col-md-4">
                <input type="text" wire:model='search' class='form-control ' placeholder="Pencarian">
            </div>
            <div class='col-md' wire:loading wire:target='search'>
                Proses Pencarian
            </div>
        </div>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Product</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data_product as $index => $item_product)
            <tr>
                <td>{{ $data_product->firstItem() + $index }}</td>
                <td>{{ $item_product->nama }}</td>
                <td>{{ $item_product->harga }}</td>
                <td>Aksi</td>

            </tr>
            @endforeach
        </tbody>
    </table>
    <div>{{ $data_product->links() }}</div>
</div>
<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <div class="mb-3">
        <div class="card mb-3 col-5">
            {{-- <input type="text" class="form-control form-control-sm" wire:model="nama"> --}}
            {{-- <textarea wire:model="nama" cols="30" rows="2"></textarea> --}}
            {{-- <input type="radio" wire:model="nama" value='laki'>Laki Laki --}}
            {{-- <input type="radio" wire:model="nama" value='perempuan'>Perempuan --}}
            {{-- <select wire:model='nama' class="form-control">
                <option value="Anhari">Anhari</option>
                <option value="Baim">Baim</option>
            </select> --}}
            {{-- <p>Ini Belajar dari Bos {{ $nama }}</p> --}}
        </div>
        <div class="card col-5">
            <div class="form-group">

                <input type={{ ($show_password==true) ? 'text' : 'password' }} class="form-control" wire:model="pass"
                    placeholder="Masukan Password">

            </div>
            <div class="form-control">
                <label for="" class='inline-block'>Tampilkan</label>
                <input id='' type="checkbox" wire:model="show_password">
            </div>

        </div>

    </div>


</div>
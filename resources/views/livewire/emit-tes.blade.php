<div>
    {{-- The Master doesn't talk, he acts. --}}
    <h3>Ini adalah Tes emit</h3>
    <h2>{{ $tampil }}</h2>
    <button wire:click="$emit('postedAdd')">Emit</button>
</div>
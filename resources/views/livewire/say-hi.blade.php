<div>
    hello {{ $contact->name }} : {{ now() }}

    <button wire:click="$refresh">Refresh</button>
</div>
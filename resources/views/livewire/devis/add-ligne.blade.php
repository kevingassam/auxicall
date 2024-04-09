<form wire:submit="create">
    @include('components.alert-livewire')
    <div class="row">
        <div class="col-sm-12 m-1">
            Intitulé
            <input type="text" required class="form-control" wire:model="intitule">
            @error('intitule')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-sm-12 m-1">
            Quantité
            <input type="number" required class="form-control " wire:model="qte">
            @error('qte')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-sm-12 m-1">
            Prix unitaire
            <input type="text" required class="form-control" wire:model="prix">
            @error('prix')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <br>
    <div class="text-center">
        <button type="submit" class="btn btn-sm btn-primary">
            <i class="bx bx-task"></i> Enregistrer la ligne
        </button>
    </div>
</form>

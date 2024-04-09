<form wire:submit="update">
    @include('components.alert-livewire')

    <div class="row">
        <div class="mb-2 mt-2 col-sm-6">
            <label class="form-label">Numero de telephone</label>
            <input type="tel" wire:model="phone"
                class="form-control  @error('phone') is-invalid @enderror ">
            @error('phone')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-2 mt-2 col-sm-6">
            <label class="form-label">Email</label>
            <input type="email" wire:model="email"
                class="form-control  @error('email') is-invalid @enderror ">
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-2 mt-2 col-sm-6">
            <label class="form-label">Localisation</label>
            <input type="location" wire:model="location"
                class="form-control  @error('location') is-invalid @enderror ">
            @error('location')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-2 mt-2 col-sm-6">
            <label class="form-label">Url map de la localisation</label>
            <input type="url" wire:model="url_location"
                class="form-control  @error('url_location') is-invalid @enderror ">
            @error('url_location')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <br>
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary">
            <span class="spinner-border spinner-border-sm" wire:loading role="status" aria-hidden="true"></span>
            Enregistrer les changements
        </button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
</form>
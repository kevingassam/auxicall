<div>
    <form wire:submit="create">
        @include('components.alert-livewire')
        <div class="card-body card">
            <h5>
                Informations du client
            </h5>
            <div class="row">
                <div class="mb-1 mt-1 col-sm-12">
                    <label class="form-label">Intitulé du devis</label>
                    <input type="text" wire:model="intitule" required
                        class="form-control  @error('intitule') is-invalid @enderror ">
                    @error('intitule')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-1 mt-1 col-sm-6">
                    <label class="form-label">Nom</label>
                    <input type="text" wire:model="nom_client" required
                        class="form-control  @error('nom_client') is-invalid @enderror ">
                    @error('nom_client')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-1 mt-1 col-sm-6">
                    <label class="form-label">Email </label>
                    <input type="email" wire:model="email_client" required
                        class="form-control  @error('email_client') is-invalid @enderror ">
                    @error('email_client')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-1 mt-1 col-sm-6">
                    <label class="form-label">Adresse </label>
                    <input type="text" wire:model="adresse_client" required
                        class="form-control  @error('adresse_client') is-invalid @enderror ">
                    @error('adresse_client')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-1 mt-1 col-sm-6">
                    <label class="form-label">Numéro de téléphone</label>
                    <input type="tele" wire:model="phone_client" required
                        class="form-control  @error('phone_client') is-invalid @enderror ">
                    @error('phone_client')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-1 mt-1 col-sm-12">
                    <label class="form-label">Description du devis</label>
                    <textarea wire:model="description"  class="form-control  @error('description') is-invalid @enderror" required cols="70">
                    </textarea>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">
                <span class="spinner-border spinner-border-sm" wire:loading role="status" aria-hidden="true"></span>
                Enregistrer le devis
            </button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
    </form>

</div>
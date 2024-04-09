<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title">
            Ajouter un article
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    @include('components.alert-livewire')
    <form wire:submit="create">
        <div class="modal-body">
            <div class="mb-3 mt-3">
                <label class="form-label">Titre de l'article</label>
                <input type="text" wire:model="titre" required
                    class="form-control  @error('titre') is-invalid @enderror ">
                @error('titre')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3 mt-3">
                <label class="form-label">Image d'illustration</label>
                <input type="file" wire:model="photo" required
                    class="form-control  @error('photo') is-invalid @enderror ">
                @error('photo')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3 mt-3">
                <label class="form-label">Description</label>
                </textarea>
                <livewire:quill-text-editor wire:model.live="description" theme="bubble" />
                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="modal-footer">
            <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">
                <span class="spinner-border spinner-border-sm" wire:loading role="status" aria-hidden="true"></span>
                Enregistrer
            </button>
        </div>
    </form>
</div>

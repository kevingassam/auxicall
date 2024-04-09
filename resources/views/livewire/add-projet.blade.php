<form wire:submit="create">
    @include('components.alert-livewire')
    <br>
    <div class="mb-3 mt-3">
        <label class="form-label">Titre du projet</label>
        <input type="text" wire:model="name" required
            class="form-control  @error('name') is-invalid @enderror ">
        @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="row">
    <div class="mb-3 mt-3 col-sm-6">
        <label class="form-label">Url</label>
        <input type="url" wire:model="url"
            class="form-control  @error('url') is-invalid @enderror ">
        @error('url')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3 mt-3 col-sm-6">
        <label class="form-label">Catégories</label>
        <select required wire:model="categorie_id"
            class="form-control  @error('categorie_is') is-invalid @enderror ">
            <option value=""></option>
            @foreach ($categories as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
        </select>

        @error('categorie_id')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
        <div class="mb-3 mt-3 col-sm-6">
            <label class="form-label">Photo</label>
            <input type="file" wire:model="photo" required
                class="form-control  @error('photo') is-invalid @enderror ">
            @error('photo')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3 mt-3 col-sm-6">
            <label class="form-label">Autres photos</label>
            <input type="file" wire:model="photos[]"
                class="form-control  @error('photos') is-invalid @enderror ">
            @error('photos')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="mb-3 mt-3">
        <label class="form-label">description du service</label>
        <textarea wire:model="description" required class="form-control  @error('description') is-invalid @enderror "
            rows="7"></textarea>
        @error('description')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3 mt-3">
        <button type="submit" id="btn_addService" class="btn btn-primary waves-effect waves-light">
            Enregistrer le service
            <span class="spinner-border spinner-border-sm" wire:loading role="status"
                aria-hidden="true"></span>
        </button>
    </div>
</form>
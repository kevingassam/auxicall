<!--page-content-wrapper-->
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="">
            <div class="row">
                <div class="col-sm-8">
                    <div class="card-body card ">
                        <h6 class="mb-0 text-uppercase">Liste des categories</h6>
                        <br>
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Crétion</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($categories as $categorie)
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>{{ $categorie->name }}</td>
                                        <td>{{ $categorie->description }}</td>
                                        <td>{{ $categorie->created_at }}</td>
                                        <td>
                                            <button class="btn btn-danger btn-sm" 
                                            wire:confirm="Are you sure you want to delete this ?"
                                            wire:click="delete({{ $categorie->id}})">
                                                <i class="bx bxs-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="5" class="text-center">Aucun résultat</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card-body card ">
                        <form wire:submit="create">
                            <h6 class="mb-0 text-uppercase">Nouveau categorie</h6>
                            <br>
                            @include('components.alert-livewire')
                            <div class="mb-3 mt-3">
                                <label class="form-label">Nom du categorie</label>
                                <input type="text" wire:model="name" required
                                    class="form-control  @error('name') is-invalid @enderror ">
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3 mt-3">
                                <label class="form-label">description du categorie</label>
                                <textarea wire:model="description" required class="form-control  @error('description') is-invalid @enderror " rows="7"></textarea>
                                @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3 mt-3">
                                <button type="submit" id="btn_addcategorie"
                                    class="btn btn-primary waves-effect waves-light">
                                    Enregistrer la categorie
                                    <span class="spinner-border spinner-border-sm" wire:loading role="status"
                                        aria-hidden="true"></span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

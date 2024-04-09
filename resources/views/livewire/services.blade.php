<!--page-content-wrapper-->
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="">
            <div class="row">
                <div class="col-sm-8">
                    <div class="card-body card ">
                        <h6 class="mb-0 text-uppercase">Liste des services</h6>
                        <br>
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Icone</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Crétion</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($list_services as $key=>$service)
                                    <tr>
                                        <th scope="row">{{ $key++ }}</th>
                                        <td><img src="{{ Storage::url($service->icone) }}" height="50" width="50"></td>
                                        <td>{{ $service->name }}</td>
                                        <td>{{ $service->description }}</td>
                                        <td>{{ $service->created_at }}</td>
                                        <td>
                                            <button class="btn btn-danger btn-sm" 
                                            wire:confirm="Are you sure you want to delete this ?"
                                            wire:click="delete({{ $service->id}})">
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
                            <h6 class="mb-0 text-uppercase">Nouveau service</h6>
                            <br>
                            @include('components.alert-livewire')
                            <div class="mb-3 mt-3">
                                <label class="form-label">Nom du service</label>
                                <input type="text" wire:model="name" required
                                    class="form-control  @error('name') is-invalid @enderror ">
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3 mt-3">
                                <label class="form-label">Icone d'illustration (48x48) </label>
                                <input type="file" wire:model="icone" required
                                    class="form-control  @error('icone') is-invalid @enderror ">
                                @error('icone')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3 mt-3">
                                <label class="form-label">description du service</label>
                                <textarea wire:model="description" required class="form-control  @error('description') is-invalid @enderror " cols="7"></textarea>
                                @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3 mt-3">
                                <button type="submit" id="btn_addService"
                                    class="btn btn-primary waves-effect waves-light">
                                    Enregistrer le service
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

<!--page-content-wrapper-->
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="card-body card ">
            <div class="d-flex justify-content-between">
                <h6 class="mb-0 text-uppercase">Liste des projets</h6>
                <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#exampleLargeModal">
                    <i class="bx bx-plus"></i>
                    Ajouter un projet
                </button>
            </div>
            <br>
            <div class="table-responsive">
                <table class="table mb-0">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">photo</th>
                            <th scope="col">Titre</th>
                            <th scope="col">Catégorie</th>
                            <th scope="col">Création</th>
                            <th scope="col"></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($list_projets as $projet)
                            <tr>
                                <th scope="row">1</th>
                                <td><img src="{{ Storage::url($projet->photo) }}" height="30" width="30"></td>
                                <td>{{ $projet->titre }}</td>
                                <td>{{ $projet->getCategorie->name }}</td>
                                <td>{{ $projet->created_at }}</td>
                                <td>
                                    <button class="btn btn-dark btn-sm"
                                        wire:confirm="Are you sure you want to delete this ?"
                                        wire:click="delete({{ $projet->id }})">
                                        <i class="bx bx-world"></i>
                                    </button>
                                    <button class="btn btn-info btn-sm"
                                        wire:confirm="Are you sure you want to delete this ?"
                                        wire:click="delete({{ $projet->id }})">
                                        <i class="bx bx-pen"></i>
                                    </button>
                                    <button class="btn btn-danger btn-sm"
                                        wire:confirm="Are you sure you want to delete this ?"
                                        wire:click="delete({{ $projet->id }})">
                                        <i class="bx bxs-trash"></i>
                                    </button>
                                    
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center">Aucun résultat</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="exampleLargeModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        Ajouter un projet
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @livewire('AddProjet')
                </div>
            </div>
        </div>
    </div>
</div>

<!--page-content-wrapper-->
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="">
            <div class="card-body card ">
                <div class="d-flex justify-content-between">
                    <h6 class="mb-0 text-uppercase">Liste des articles</h6>
                    <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#exampleLargeModal">
                        <i class="bx bx-plus"></i>
                        Ajouter un article
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
                                <th scope="col">Vue</th>
                                <th scope="col">url</th>
                                <th scope="col">Création</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($blogs as $key=>$blog)
                                <tr>
                                    <td> {{ $key++ }} </td>
                                    <td> <img src="{{ Storage::url($blog->photo) }}" height="30" width="30">
                                    </td>
                                    <td> {{ $blog->titre }} </td>
                                    <td> 
                                        <i class="bx bx-stats"></i>
                                        {{ $blog->GetVisites->count() }} 
                                    </td>
                                    <td>
                                        <a href="/blog/{{ $blog->id }}" target="__blank">
                                            <i class="bx bx-anchor"></i> lire l'article
                                        </a>
                                    </td>
                                    <td> {{ $blog->created_at }} </td>
                                    <td>
                                        <a href="/blog/{{ $blog->id }}" target="__blank">
                                            <button class="btn btn-dark btn-sm">
                                                <i class="bx bx-world"></i>
                                            </button>
                                        </a>
                                        <button class="btn btn-info btn-sm"
                                            wire:confirm="Are you sure you want to delete this ?"
                                            wire:click="delete({{ $blog->id }})">
                                            <i class="bx bx-pen"></i>
                                        </button>
                                        <button class="btn btn-danger btn-sm"
                                            wire:confirm="Are you sure you want to delete this ?"
                                            wire:click="delete({{ $blog->id }})">
                                            <i class="bx bxs-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6">Aucun article</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>






    <!-- Modal -->
    <div class="modal fade" id="exampleLargeModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            @livewire('Blog.Add')
        </div>
    </div>
</div>

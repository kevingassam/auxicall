<div class="table-responsive">
    <table class="table mb-0">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Intitulé</th>
                <th scope="col">Nom du client</th>
                <th scope="col">Numéro de téléphone</th>
                <th scope="col">email</th>
                <th scope="col">Date</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @forelse ($devis as $key=>$item)
                <tr>
                    <th scope="row">{{ $key++ }}</th>
                    <td>{{ $item->titre }}</td>
                    <td>{{ $item->nom_client }}</td>
                    <td>{{ $item->phone_client }}</td>
                    <td>{{ $item->email_client }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td>
                        <a href="/admin/devis/{{ $item->id }}">
                            <button class="btn btn-dark btn-sm">
                                <i class="bx bx-pen"></i>
                                contenu
                            </button>
                        </a>
                        <a href="/admin/devis/{{ $item->id }}/print">
                            <button class="btn btn-primary btn-sm" >
                                <i class="bx bx-printer"></i>
                            </button>
                        </a>
                        <button class="btn btn-danger btn-sm" wire:confirm="Are you sure you want to delete this?"
                            wire:click="deleteDevis({{ $item->id }})">
                            <i class="bx bx-trash"></i>
                        </button>

                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">
                        Aucun détail trouvé.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

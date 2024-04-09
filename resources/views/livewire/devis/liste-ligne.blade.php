<div>
    <table class="table">
        <tr>
            <th scope="col">Initulé</th>
            <th scope="col">Qté</th>
            <th scope="col">Pu</th>
            <th scope="col">Prix Total</th>
            <th></th>
        </tr>
        @forelse ($list as $item)
            <tr>
                <td>{{ $item->intitule }}</td>
                <td>{{ $item->qte }}</td>
                <td>{{ $item->prix }} €</td>
                <td>{{ $item->qte * $item->prix }} €</td>
                <td>
                    <button class="btn btn-sm btn-danger"
                    wire:confirm="Are you sure you want to delete this?"
                    wire:click="delete({{ $item->id }})"
                    >
                        <i class="bx bx-trash"></i>
                    </button>
                </td>
            </tr>
            </tr>
        @empty
        <tr><td colspan="5">Aucun élément dans le devis.</td></tr>
        @endforelse
    </table>
</div>
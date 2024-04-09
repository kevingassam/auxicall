<button class="btn btn-sm btn-warning" wire:click ="send()">
    <i class="bx bx-send"></i>
    Envoyer le devis
    <span class="spinner-border spinner-border-sm" wire:loading role="status" aria-hidden="true"></span>

    @if (session()->has('success'))
        Envoyé
    @endif

    @if (session()->has('error'))
        Echec
    @endif

</button>

<!--page-content-wrapper-->
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="card-body card ">
            <div class="d-flex justify-content-between">
                <h6 class="mb-0 text-uppercase">Liste des contacts du formulaire</h6>
                <div>
                    <input type="date" wire:model.live="date" class="form-control">
                    <span class="spinner-border spinner-border-sm" wire:loading role="status" aria-hidden="true"></span>
                </div>
            </div>
            <br>
            <div class="table-responsive">
                <table class="table mb-0">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Sujet</th>
                            <th scope="col">Message</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                      @forelse ($contacts as $contact)
                          <tr>
                            <td></td>
                            <td>
                                <b> {{  $contact->name }} </b>
                            </td>
                            <td>{{  $contact->email }}</td>
                            <td>{{  $contact->phone }}</td>
                            <td>
                                <b>{{  $contact->sujet }}</b> <br>
                                <span class="text-muted"> <i>{{  $contact->created_at }}</i> </span>
                            </td>
                            <td>
                                <div style="width: 200;">
                                    {!!  $contact->message !!}
                                </div>
                            </td>
                            <td>
                                <button class="btn btn-sm btn-danger"
                                wire:confirm="Are you sure you want to delete this ?"
                                wire:click="delete({{ $contact->id }})"
                                >
                                    <i class="bx bx-trash"></i>
                                    Supprimer
                                </button>
                            </td>
                          </tr>
                      @empty
                      <tr>
                        <td colspan="7">
                            Aucun résultat!
                        </td>
                      </tr>
                      @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php

namespace App\Livewire;

use App\Models\configurations;
use App\Models\devis;
use App\Models\ligne_devis;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use PDF as PDFgen;

class SendDevis extends Component
{

    public $devis;

    public function mount($devis)
    {
        $this->devis = $devis;
    }
    public function render()
    {
        return view('livewire.send-devis');
    }

    public function send()
    {
        $devis = devis::find($this->devis->id);
        if ($devis) {

            $lignes = ligne_devis::where("devis_id", $devis->id)->get();
            $data = [
                "devis" => $devis,
                "lignes" => $lignes,
                "config" => configurations::firstOrCreate()
            ];
            $pdf = PDFgen::loadView('pdf.devis', $data);

            // Envoyer le PDF par e-mail
            Mail::mailer('smtp1')->send([], [], function ($message) use ($pdf, $devis) {
                $message->to($devis->email_client)
                    ->from("devis@kevin-gassam.com", "KG CODE+")
                    ->subject('ENVOIE DE DEVIS AUTOMATIQUE ( KG CODE+ ) ')
                    ->html('<p></p>')
                    ->attachData($pdf->output(), "Devis pour " . $devis->nom_client . ' #' . $devis->id . ' .pdf');
            });

            // Retourner une réponse
            session()->flash('success', 'Service Deleted Successfully');
        } else {
            session()->flash('error', 'Error Deleting Service! Please Try Again Later');
        }
    }
}

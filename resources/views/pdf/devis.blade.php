<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="container-fluid">
        <table class="table">
            <tr>
                <td>
                    <div>
                        
                        <img src="{{ asset("logo-black.png")}}" alt="logo" height="40">
                        <div class="text-muted small">
                            {{ $config->email ?? "" }}<br />
                            {{ $config->phone ?? "" }} <br />
                            {{ $config->location ?? "" }} <br />
                            <a href="https://kevin-gassam.com"> www.kevin-gassam.com </a>
                            <hr>
                            <div>
                                <b>Facturé a</b>
                                <div>
                                    {{ $devis->nom_client }} <br>
                                    {{ $devis->email_client }} <br>
                                    {{ $devis->phone_client }} <br>
                                    {{ $devis->adresse_client }} <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div>
                        <h5>DEVIS</h5>
                        <h6>#{{ $devis->id }}</h6>
                        <hr>
                        <i>
                            Imprimé le {{ date('d m Y') }}
                        </i>
                    </div>
                </td>
            </tr>
        </table>
        <br /><br />
        <div class="row">
            <div class="col-sm-10 mx-auto text-center">
                <b>
                    <h4>{{ $devis->titre }}</h4>
                </b>
                <p class="small">
                    {{ $devis->description }}
                </p>
            </div>
        </div>
        <br />
        <table class="table small">
            <thead>
                <tr>
                    <th class="col-td">#</th>
                    <th class="col-td">Intitulé</th>
                    <th class="col-td">Prix Unitaire</th>
                    <th class="col-td">Quatité</th>
                    <th class="col-td">Prix Total</th>
                </tr>
            </thead>
            @php
                $total =0;
            @endphp
            @forelse ($lignes as $key=>$item)
                <tr>
                    <td> {{ $key }} </td>
                    <td> {{ $item->intitule }} </td>
                    <td> {{ $item->prix }} €</td>
                    <td> {{ $item->qte }} </td>
                    <td> {{ $item->prix*$item->qte }} €</td>
                </tr>
                @php
                    $total += $item->prix*$item->qte;
                @endphp
            @empty
                
            @endforelse
            <tr>
                <td colspan="3"></td>
                <td><b>Total HT :</b></td>
                <td><b>{{ $total }} €</b></td>
            </tr>
            <tr>
                <td colspan="3"></td>
                <td><b>TVA :</b></td>
                <td><b>0.00 €</b></td>
            </tr>
            <tr>
                <td colspan="3"></td>
                <td><b>Total HTT :</b></td>
                <td><b>{{ $total }} €</b></td>
            </tr>
        </table>
        <div style="text-align: right;">
            <img src="signature.png" alt="logo" height="100">
        </div>
    </div>
</body>

</html>
<style>
    .col-td {
        background-color: #202020 !important;
        color: white !important;
    }
</style>

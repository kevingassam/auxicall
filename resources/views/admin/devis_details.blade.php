@extends('admin.fixe')
@section('titre', $devis->titre)




@section('content')
    <!--page-content-wrapper-->
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="card-body card ">
                <div class="d-flex justify-content-between">
                    <h6 class="mb-0 text-uppercase">{{ $devis->titre }} </h6>
                    <div>
                        <a href="/admin/devis/{{ $devis->id }}/print">
                            <button class="btn btn-sm btn-dark" data-bs-toggle="modal" data-bs-target="#exampleLargeModal">
                                <i class="bx bx-printer"></i>
                                Imprimer
                            </button>
                        </a>
                        @livewire('SendDevis', ['devis' => $devis])
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="card p-2">
                            <h5>
                                Ajouter un élément
                            </h5>
                            <br>
                            @livewire('Devis.AddLigne', ['devis' => $devis])
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <h5>
                            Contenu du devis
                        </h5>
                        @livewire('Devis.ListeLigne', ['devis' => $devis])

                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection



@section('script')
    <script src="/assets/js/bootstrap.bundle.min.js"></script>

    <!--plugins-->
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="/assets/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <!-- Vector map JavaScript -->
    <script src="/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="/assets/plugins/vectormap/jquery-jvectormap-in-mill.js"></script>
    <script src="/assets/plugins/vectormap/jquery-jvectormap-us-aea-en.js"></script>
    <script src="/assets/plugins/vectormap/jquery-jvectormap-uk-mill-en.js"></script>
    <script src="/assets/plugins/vectormap/jquery-jvectormap-au-mill.js"></script>
    <script src="/assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
    <script src="/assets/js/index2.js"></script>
    <!-- App JS -->
    <script src="/assets/js/app.js"></script>
@endsection

@section('header')
    <!--plugins-->
    <link href="/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="/assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
    <!-- loader-->
    <link href="/assets/css/pace.min.css" rel="stylesheet" />
    <script src="/assets/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&family=Roboto&display=swap" />
    <!-- Icons CSS -->
    <link rel="stylesheet" href="/assets/css/icons.css" />
    <!-- App CSS -->
    <link rel="stylesheet" href="/assets/css/app.css" />
    <link rel="stylesheet" href="/assets/css/dark-sidebar.css" />
    <link rel="stylesheet" href="/assets/css/dark-theme.css" />
@endsection

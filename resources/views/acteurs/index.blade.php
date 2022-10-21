@extends('dashboard')

@section('content')
<div class="app-main__inner">

    <div class="row">
        <div class="col-md-6 col-xl-3">
            <div
                class="card mb-3 widget-chart widget-chart2 text-left card-btm-border card-shadow-success border-success">
                <div class="widget-chat-wrapper-outer">
                    <div class="widget-chart-content pt-3 pl-3 pb-1">
                        <div class="widget-chart-flex">
                            <div class="widget-numbers">
                                <div class="widget-chart-flex">
                                    <div class="fsize-4">

                                        <span>{{ $total }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h6 class="widget-subheading mb-0 opacity-5">Total acteurs</h6>
                    </div>
                    <div class="no-gutters widget-chart-wrapper mt-3 mb-3 pl-2 he-auto row">
                        <div class="col-md-9">
                            <div id="dashboard-sparklines-1"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div
                class="card mb-3 widget-chart widget-chart2 text-left card-btm-border card-shadow-primary border-primary">
                <div class="widget-chat-wrapper-outer">
                    <div class="widget-chart-content pt-3 pl-3 pb-1">
                        <div class="widget-chart-flex">
                            <div class="widget-numbers">
                                <div class="widget-chart-flex">
                                    <div class="fsize-4">

                                        <span>{{ $totalC }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h6 class="widget-subheading mb-0 opacity-5">Contrôleurs</h6>
                    </div>
                    <div class="no-gutters widget-chart-wrapper mt-3 mb-3 pl-2 he-auto row">
                        <div class="col-md-9">
                            <div id="dashboard-sparklines-2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div
                class="card mb-3 widget-chart widget-chart2 text-left card-btm-border card-shadow-warning border-warning">
                <div class="widget-chat-wrapper-outer">
                    <div class="widget-chart-content pt-3 pl-3 pb-1">
                        <div class="widget-chart-flex">
                            <div class="widget-numbers">
                                <div class="widget-chart-flex">
                                    <div class="fsize-4">

                                        <span>{{ $totalL }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h6 class="widget-subheading mb-0 opacity-5">Livreurs</h6>
                    </div>
                    <div class="no-gutters widget-chart-wrapper mt-3 mb-3 pl-2 he-auto row">
                        <div class="col-md-9">
                            <div id="dashboard-sparklines-3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div
                class="card mb-3 widget-chart widget-chart2 text-left card-btm-border card-shadow-danger border-danger">
                <div class="widget-chat-wrapper-outer">
                    <div class="widget-chart-content pt-3 pl-3 pb-1">
                        <div class="widget-chart-flex">
                            <div class="widget-numbers">
                                <div class="widget-chart-flex">
                                    <div class="fsize-4">

                                        <span>564</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h6 class="widget-subheading mb-0 opacity-5">Nouveaux</h6>
                    </div>
                    <div class="no-gutters widget-chart-wrapper mt-3 mb-3 pl-2 he-auto row">
                        <div class="col-md-9">
                            <div id="dashboard-sparklines-4"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-3">
        <div class="card-header-tab card-header">
            <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                    <i class="header-icon lnr-laptop-phone mr-3 text-muted opacity-6"> </i>Liste des acteurs
            </div>

            <div class="btn-actions-pane-right actions-icon-btn">
                <div class="btn-group dropdown">
                    <a href="{{ route('acteurs.create') }}">
                        <button class="mb-2 mr-2 btn-icon btn btn-success">
                            Ajouter
                        </button>
                    </a>
                </div>
            </div>


        </div>
        <div class="card-body">
            <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Photo</th>
                        <th>Nom</th>
                        <th>Prénom(s)</th>
                        <th>Email</th>
                        <th>Fonction</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($acteurs as $index => $acteur)
                        <tr>
                            <td>
                                <div class="widget-user-image">
                                    <img class="rounded-circle img-circle elevation-2 " id="photos" src="{{ asset($acteur->photo) }}">
                                </div>
                            </td>

                            <td> {{ $acteur->firstname }}</td>
                            <td> {{ $acteur->lastname }}</td>
                            <td> {{ $acteur->user->email }}</td>
                            <td>{{ $acteur->fonction->name }} </td>
                            <td>
                                <div class="buttons">
                                    <a href="{{ route('acteurs.edit', $acteur) }}" class="btn btn-outline-warning">Editer</a>
                                    <a href="{{ route('acteurs.delete', $acteur) }}" class="btn btn-outline-danger" onclick="return confirm('Voulez-vous vraiment effectuer la suppression ?')">Supprimer</a>

                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Photo</th>
                        <th>Nom</th>
                        <th>Prénom(s)</th>
                        <th>Fonction</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
@endsection

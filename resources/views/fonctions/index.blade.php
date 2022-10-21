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
                        <h6 class="widget-subheading mb-0 opacity-5">Total des fonctions</h6>
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
                                        <span>{{ $totalNV }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h6 class="widget-subheading mb-0 opacity-5">Avec description</h6>
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
                                        <span>{{ $totalV }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h6 class="widget-subheading mb-0 opacity-5">Sans description</h6>
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
                <i class="header-icon lnr-laptop-phone mr-3 text-muted opacity-6"> </i>Liste des fonctions
            </div>

            <div class="btn-actions-pane-right actions-icon-btn">
                <div class="btn-group dropdown">
                    <a href="{{ route('fonctions.create') }}">
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
                        <th>Nom</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($fonctions as $index => $fonction)
                        <tr>
                            <td>{{ $fonction->name }} </td>
                            <td> {{ $fonction->description }}</td>
                            <td>
                                <div class="buttons">
                                    <a href="{{ route('fonctions.edit', $fonction) }}" class="btn btn-outline-warning">Editer</a>
                                    <a href="{{ route('fonctions.delete', $fonction) }}" class="btn btn-outline-danger" onclick="return confirm('Voulez-vous vraiment effectuer la suppression ?')">Supprimer</a>

                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Nom</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
@endsection

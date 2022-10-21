@extends('dashboard')

@section('content')
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-car icon-gradient bg-mean-fruit"></i>
                </div>
                <div>Dashboard clients
                    <div class="page-title-subheading">Tableau de bord de la gestion des clients</div>
                </div>
            </div>
            <div class="page-title-actions">
                <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom"
                    class="btn-shadow mr-3 btn btn-dark">
                    <i class="fa fa-star"></i>
                </button>
                <div class="d-inline-block dropdown">
                    <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                        <span class="btn-icon-wrapper pr-2 opacity-7">
                            <i class="fa fa-business-time fa-w-20"></i>
                        </span>
                        Buttons
                    </button>
                    <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link">
                                    <i class="nav-link-icon lnr-inbox"></i>
                                    <span> Inbox</span>
                                    <div class="ml-auto badge badge-pill badge-secondary">86</div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link">
                                    <i class="nav-link-icon lnr-book"></i>
                                    <span> Book</span>
                                    <div class="ml-auto badge badge-pill badge-danger">5</div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link">
                                    <i class="nav-link-icon lnr-picture"></i>
                                    <span> Picture</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a disabled class="nav-link disabled">
                                    <i class="nav-link-icon lnr-file-empty"></i>
                                    <span> File Disabled</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                                        <small class="opacity-5">$</small>
                                        <span>874</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h6 class="widget-subheading mb-0 opacity-5">sales last month</h6>
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
                                        <small class="opacity-5">$</small>
                                        <span>1283</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h6 class="widget-subheading mb-0 opacity-5">sales Income</h6>
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
                                        <small class="opacity-5">$</small>
                                        <span>1286</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h6 class="widget-subheading mb-0 opacity-5">last month sales</h6>
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
                                        <small class="opacity-5">$</small>
                                        <span>564</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h6 class="widget-subheading mb-0 opacity-5">total revenue</h6>
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
                    <i class="header-icon lnr-laptop-phone mr-3 text-muted opacity-6"> </i>Liste des clients
            </div>

            <!-- <div class="btn-actions-pane-right actions-icon-btn">
                <div class="btn-group dropdown">
                    <a href="{{ route('clients.create') }}">
                        <button class="mb-2 mr-2 btn-icon btn btn-success">
                            Ajouter
                        </button>
                    </a>
                </div>
            </div> -->

        </div>
        <div class="card-body">
            <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Photo</th>
                        <th>Nom</th>
                        <th>Prénom(s)</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($clients as $index => $client)
                        <tr>
                            <td>
                                <div class="widget-user-image">
                                    <img class="rounded-circle" id="photos" src="{{ asset($acteur->photo) }}">
                                </div>
                            </td>
                            <td> {{ $client->firstname }}</td>
                            <td> {{ $client->lastname }}</td>
                            <td> {{ $client->email }}</td>
                            <td>
                                <div class="buttons">
                                    <a href="{{ route('clients.edit', $client) }}" class="btn btn-outline-warning">Editer</a>
                                    <a href="{{ route('clients.delete', $acteur) }}" class="btn btn-outline-danger" onclick="return confirm('Voulez-vous vraiment effectuer la suppression ?')">Supprimer</a>

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
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
@endsection

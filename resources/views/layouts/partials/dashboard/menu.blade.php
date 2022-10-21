<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
                <li class="app-sidebar__heading">Administration</li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-rocket"></i>Acteurs
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('acteurs.create') }}"  class="" >
                                <i class="metismenu-icon"></i>Ajouter un acteur
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('acteurs.index') }}" >
                                <i class="metismenu-icon"></i>Liste des acteurs
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-browser"></i>Menus
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('menus.create') }}" >
                                <i class="metismenu-icon"></i> Ajouter un menu
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('menus.index') }}" >
                                <i class="metismenu-icon"></i>Liste des menus
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-rocket"></i>Catégories
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('categories.create') }}"  class="" >
                                <i class="metismenu-icon"></i>Ajouter une catégorie
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('categories.index') }}" >
                                <i class="metismenu-icon"></i>Liste des catégories
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-browser"></i>Fonctions
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('fonctions.create') }}" >
                                <i class="metismenu-icon"></i> Ajouter une fonction
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('fonctions.index') }}" >
                                <i class="metismenu-icon"></i>Liste des fonctions
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-browser"></i>Images
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('images.create') }}" >
                                <i class="metismenu-icon"></i> Ajouter une image
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('images.index') }}" >
                                <i class="metismenu-icon"></i>Liste des images
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-browser"></i>Images associées
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('imageassocies.create') }}" >
                                <i class="metismenu-icon"></i> Associer une image
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('imageassocies.index') }}" >
                                <i class="metismenu-icon"></i>Liste des images associées
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-browser"></i>Rôles
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('roles.create') }}" >
                                <i class="metismenu-icon"></i> Ajouter un rôle
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('roles.index') }}" >
                                <i class="metismenu-icon"></i>Liste des rôles
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-browser"></i>Compte utilisateur
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('users.create') }}" >
                                <i class="metismenu-icon"></i> Ajouter un utilisateur
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('users.index') }}" >
                                <i class="metismenu-icon"></i>Liste des utilisateurs
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="vertical-nav-menu">
                <li class="app-sidebar__heading">Mon compte</li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-rocket"></i>Informations
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="#"  class="" >
                                <i class="metismenu-icon"></i>Bilan informations
                            </a>
                        </li>
                        <li>
                            <a href="#" >
                                <i class="metismenu-icon"></i>Modifier mes informations
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('reset.index') }}" >
                        <i class="metismenu-icon pe-7s-graph"></i>Modifier mot de passe
                    </a>
                </li>
            </ul>
            <ul class="vertical-nav-menu">
                <li class="app-sidebar__heading">Déconnexion</li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-rocket"></i>Actions
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('login') }}"  class="" >
                                <i class="metismenu-icon"></i>Me déconnecter
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('index') }}" >
                                <i class="metismenu-icon"></i>Retour à la vitrine
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>

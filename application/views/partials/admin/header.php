
<div class="row">
    <div class="col-12">
        <!-- Use any element to open the sidenav -->
        <!-- <span onclick="openNav()">open</span> -->
        <div class="d-flex justify-content-between my-3">
            <div>
                <button class="btn btn-primary" type="button" onclick="openNav()"> <i class="fa fa-list"></i></button>
            </div>

            <!-- Nav tabs -->
            <ul class="nav navbar" id="navId">
                <li class="nav-item">
                    <a href="#tab1Id" class="nav-link active">Active</a>
                </li>
                <li class="nav-item">
                    <a href="#tab5Id" class="nav-link">Another link</a>
                </li>
                <!-- <li class="nav-item">
                    <a href="#" class="nav-link disabled">Disabled</a>
                </li> -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-user"></i></a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#tab2Id">Paramètres</a>
                        <!-- <a class="dropdown-item" href="#tab3Id"></a> -->
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#tab4Id">Déconnexion</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- FIL D'ARIANE -->
<div class="row my-4">
    <div class="col-12">
        <h3>Bienvenu (Nom Prénoms)</h3>
        <!-- AFFICHER SI UN MENU EST SELECTIONNE -->
        <ul id="ariane" class="list-unstyled d-none">
            <li><a href="#">Menu 1</a> </li>
            <li>Menu 2</li>
        </ul>
        <!-- <ul class="list-group list-group-horizontal">
            <a class="list-group-item list-group-item-action active" href="#">Text</a>
            <a class="list-group-item list-group-item-action disabled" href="#" tabindex="-1" aria-disabled="true">Disabled item</a>
        </ul> -->
    </div>
</div>
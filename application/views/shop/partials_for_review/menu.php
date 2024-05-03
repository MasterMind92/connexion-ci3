<!--  TOP HEADER + HEADER + CONTENT HEADER -->
<div class="wrapper mb-2">
    <div class="container">
        <!-- TOP HEADER -->
        <nav class="navbar navbar-expand-sm navbar-light bg-light">
            <div class=" navbar-collapse" id="">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" data-toggle="modal" data-target="#contact" href="#">Contactez-nous</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <!-- Button trigger login modal -->
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#login"><span><i class="fa fa-user"></i></span> Connexion </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="<?php echo base_url();?>panier"><span><i class="fa fa-shopping-cart"></i></span> Panier <span class="text-info">(1)</span> </a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- NAVBAR HEADER -->
        <nav class="navbar navbar-expand-sm navbar-light bg-light">
            <a class="navbar-brand" href="<?php echo base_url();?>">Syca Marchand</a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mr-auto  mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="#"> Categorie 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> Categorie 2</a>
                    </li>
                    <li class="nav-item dropdown has-megamenu">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"> Categorie 3  </a>
                        <div class="dropdown-menu megamenu" role="menu">
                            <div class="row g-3">
                                <div class="col-lg-3 col-6">
                                    <div class="col-megamenu">
                                        <h6 class="title">Sous categorie 1</h6>
                                        <ul class="list-unstyled">
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                        </ul>
                                    </div>  <!-- col-megamenu.// -->
                                </div><!-- end col-3 -->
                                <div class="col-lg-3 col-6">
                                    <div class="col-megamenu">
                                        <h6 class="title">Sous categorie 2</h6>
                                        <ul class="list-unstyled">
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                        </ul>
                                    </div>  <!-- col-megamenu.// -->
                                </div><!-- end col-3 -->
                                <div class="col-lg-3 col-6">
                                    <div class="col-megamenu">
                                        <h6 class="title">Sous categorie 3</h6>
                                        <ul class="list-unstyled">
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                        </ul>
                                    </div>  <!-- col-megamenu.// -->
                                </div>    
                                <div class="col-lg-3 col-6">
                                    <div class="col-megamenu">
                                        <h6 class="title">Sous categorie 4</h6>
                                        <ul class="list-unstyled">
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                        </ul>
                                    </div>  <!-- col-megamenu.// -->
                                </div><!-- end col-3 -->
                            </div><!-- end row --> 
                        </div> <!-- dropdown-mega-menu.// -->
                    </li>
                </ul>
                <form action="<?php echo base_url();?>search" method="get" class="form-inline my-2 my-lg-0">
                    <div class="input-group">
                        <input class="form-control" type="text" name="product" placeholder="Rechercher Produit">
                        <div class="input-group-append">
                            <button class="btn btn-outline-success my-sm-0" type="submit"> <i class="fa fa-search"></i> </button>
                        </div>
                    </div>
                </form>
            </div>
        </nav>
    </div>
</div>
<!-- TOP HEADER END -->
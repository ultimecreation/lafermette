<div id="main__nav">
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
       <div class="container">
       <a class="navbar-brand" href="#">GrouinGrou & Co</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Accueil</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Ressources
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?php echo siteUrl('/techniques');?>">Techniques</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo siteUrl('/batiments');?>">Batiments</a>
                        <a class="dropdown-item" href="<?php echo siteUrl('/consommables');?>">Consommables</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo siteUrl('/animaux');?>">Animaux</a>
                        <a class="dropdown-item" href="<?php echo siteUrl('/aliments');?>">Aliments</a>
                    </div>
                </li>
            </ul>
           
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form> 
            <ul class="navbar-nav">
            <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php 
                            echo !isUserLogged() 
                                ? 'Mon Compte' 
                                : "Bienvenue ".getUserData('username');

                        ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php if(!isUserLogged()):?>
                            <a class="dropdown-item" href="<?php echo siteUrl('/inscription');?>">Inscription</a>
                            <a class="dropdown-item" href="<?php echo siteUrl('/connexion');?>">Connexion</a>
                        <?php else :?>
                            <a class="dropdown-item" href="<?php echo siteUrl('/deconnexion');?>">Déconnexion</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?php echo siteUrl('/mon-compte');?>">Tableau de bord</a>
                        <?php endif;?>
                    </div>
                </li>
            </ul>
        </div>
       </div>
    </nav>
</div>

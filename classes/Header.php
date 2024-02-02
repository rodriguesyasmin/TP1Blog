<?php

class Header {
    public function renderHeader($userCreatePath, $articleCreatePath, $categorieCreatePath) {
        $header = '<header>
            <div class="header-img">
            </div>
            <nav>
                <a href="' . $userCreatePath . '">Créer utilisateur</a>
                <a href="' . $articleCreatePath . '">Créer article</a>
                <a href="' . $categorieCreatePath . '">Créer categorie</a>
            </nav>
        </header>';
        
        echo $header;
    }
}

?>

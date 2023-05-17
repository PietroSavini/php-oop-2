<?php 
    require_once __DIR__ . './prodotto.php';
    require_once __DIR__ . './categories.php';
    require_once __DIR__ . './product-categories.php';

    $in_store = [
        $product1 = new Cibo ("01/07/2023","pollo","https://www.farmacosmo.it/165195-medium_default/fresh-pollo-cibo-umido-cani-32-scatolette-100-g-111469.jpg","Monge Fresh","scatoletta di teneri bocconcini di pollo in umido",57,9.99,Category::cane()),
        $product2 = new Cibo ("02/07/2023","manzo","https://www.falcogarden.it/638-medium_default/bocconcini-gatto-manzo-gr-415-simba.jpg","Simba","bocconcini di manzo per gatti adulti",27,8.99,Category::gatto()),
        $product3 = new Cibo("28/07/2023","pollo","https://www.tigros.it/photo2/2019/11/28/2/main/large/pim-00000008030582015699-main-20191001-093005.jpg","Primia NOIDUE","Bocconcini di pollo e tacchino",12,7.99,Category::gatto()),
        $product4 = new Gioco("https://www.cuccia-per-cani.com/wp-content/uploads/2018/12/31uaaHXJYGL.jpg","The wicked bone","il primo giocattolo intelligente per cani",45,64.99,Category::cane()),
        $product5 = new Cuccia("10mt x 100mt","platino","https://www.ilverdemondo.it/public/catalog/product/medium/cucce-per-cani-in-legno-000.jpg","Cuccia per cani modello USSSR","cuccia per cani con riparo mobile di sicurezza e rifugio antiatomico",3,99999.97,Category::cane()),
        $product6 = new Gioco("https://images.eprice.it/nobrand/0/Lightbox/150/213534150/B28DA8CA-73EF-4C44-B5B9-C55DF670132C.jpg","HTN Among-Oloide","gioco per gatti da muro ispirato al famoso gioco Among Us",4,78.99,Category::gatto()),
        $product7 = new Gioco("https://qz-petshop.com/11416-home_default/camon-gioco-per-gatti-scopetta-in-matatabi-e-juta.jpg","Harry Cat-ter","scopa magica per gatti volanti per la caccia ai gabbiani",8,41.85,Category::gatto()),
        $product8 = new Cibo ("28/09/2084","amianto","https://www.gerlinde.it/public/Articoli/cateat.jpg","Gatti subatomici","cibo per gatti supereroi a lunga scadenza",1,"contatttami in privato",Category::gatto())
        ];
?>

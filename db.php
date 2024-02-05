<?php
    
    class Product {

        public $name;
        public $price;
        public $picture;
        public $category;

        public function __construct($name, $price, $picture, $category) {

            $this -> name = $name;
            $this -> price = $price;
            $this -> picture = $picture;
            $this -> category = $category;
        }

        public function getName() {
            return $this -> name;
        }

        public function setName($name) {
            $this -> name = $name;
        }

        public function getPrice() {
            return $this -> price;
        }

        public function setPrice($price) {
            $this -> price = $price;
        }

        public function getPicture() {
            return $this -> picture;
        }

        public function setPicture($picture) {
            $this -> picture = $picture;
        }

        public function getCategory() {
            return $this -> category;
        }

        public function setCategory($category) {
            $this -> category = $category;
        }
    }

    class Food extends Product {

        public function __construct($name, $price, $picture, $category, $foodType) {
            parent::__construct($name, $price, $picture, $category);
            $this -> foodType = $foodType;
        }

        public function getFoodType() {
            return $this -> foodType;
        }

        public function setFoodType($foodType) {
            $this -> foodType = $foodType;
        }

    }

    class Game extends Product {

        public function __construct($name, $price, $picture, $category, $gameType) {
            parent::__construct($name, $price, $picture, $category);
            $this -> gameType = $gameType;
        }

        public function getGameType() {
            return $this -> gameType;
        }

        public function setGameType($gameType) {
            $this -> gameType = $gameType;
        }

    }

    class Kennel extends Product {

        public function __construct($name, $price, $picture, $category, $kennelType) {
            parent::__construct($name, $price, $picture, $category);
            $this -> kennelType = $kennelType;
        }

        public function getKennelType() {
            return $this -> kennelType;
        }

        public function setKennelType($kennelType) {
            $this -> kennelType = $kennelType;
        }

    }

    // DATI DEI PRODOTTI
    $Products = [

        $Product1 = new Food ("Croccantini cane", 4.99, "https://static.zoomalia.com/prod_img/39916/lm_58930bb3825e8f631cc6075c0f87bb4978c1679569075.jpg", "https://static.vecteezy.com/ti/vettori-gratis/p3/6720668-logo-faccia-di-cane-gratuito-vettoriale.jpg", "Secco"),
        $Product2 = new Food ("Croccantini gatto", 10.50, "https://arcaplanet.vtexassets.com/arquivos/ids/286717/12538616_1.jpg?v=638215445264130000", "https://s.tmimgcdn.com/scr/800x500/275700/testa-di-gatto-carino-cartone-animato-logo-testa-di-gatto-buono-per-prodotti-correlati-alla-cura-del-gatto-v3_275731-original.jpg", "Secco"),
        $Product3 = new Game ("Palla cane", 12.99, "https://www.pacopetshop.it/3500-thickbox_default/palla-5-sensi-gioco-per-cani.jpg", "https://static.vecteezy.com/ti/vettori-gratis/p3/6720668-logo-faccia-di-cane-gratuito-vettoriale.jpg", "Palla"),
        $Product4 = new Game ("Palla gatto", 15.99, "https://m.media-amazon.com/images/I/61csTsGuauL._AC_UF894,1000_QL80_.jpg", "https://s.tmimgcdn.com/scr/800x500/275700/testa-di-gatto-carino-cartone-animato-logo-testa-di-gatto-buono-per-prodotti-correlati-alla-cura-del-gatto-v3_275731-original.jpg", "Palla"),
        $Product5 = new Kennel ("Culla per cane", 30.99, "https://www.galleranistore.it/media/catalog/product/cache/1/image/600x/040ec09b1e35df139433887a97daa66f/l/e/lettino_per_cani_con_morbido_cuscino_caterina_2_.jpg", "https://static.vecteezy.com/ti/vettori-gratis/p3/6720668-logo-faccia-di-cane-gratuito-vettoriale.jpg", "Cuccia grande"),
        $Product6 = new Kennel ("Culla per gatto", 14.99, "https://m.media-amazon.com/images/I/51efMNVb4uL.jpg", "https://s.tmimgcdn.com/scr/800x500/275700/testa-di-gatto-carino-cartone-animato-logo-testa-di-gatto-buono-per-prodotti-correlati-alla-cura-del-gatto-v3_275731-original.jpg", "Cuccia piccola"),
    
    ];

    
?>  
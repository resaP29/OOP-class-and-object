<?php
    class Produk {
        // Properties
        public 
        $name,
        $type;

        // Method
        public function describe(){
            return "Nama: $this->name | Tipe: $this->type";
        }
    }

    $produk1 = new Produk();
    $produk1->name = "Swallow";
    $produk1->type = "Sendal";
    // var_dump($produk1->name);
    var_dump($produk1->describe());
    
    echo "<br>";

    $produk2 = new Produk();
    $produk2->name = "Lenovo";
    $produk2->type = "Laptop";
    // var_dump($produk2->name);
    var_dump($produk2->describe());
?>
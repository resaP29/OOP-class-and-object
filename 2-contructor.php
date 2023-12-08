<?php
    class Produk {
        // Properties
        public 
        $name,
        $type;

        // Akan dipanggil Secara otomatis
        public function __construct($name, $type)
        {
            $this->name = $name;
            $this->type = $type;
        }

        // Method
        public function describe(){
            return "Nama: $this->name | Tipe: $this->type";
        }
    }

    $produk1 = new Produk("Swallow", "Sendal");
    $produk2 = new Produk("Lenovo", "Laptop");
    var_dump($produk1->describe());

    echo "<br>";

    var_dump($produk2->describe());
?>
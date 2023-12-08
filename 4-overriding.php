<?php

use function PHPSTORM_META\type;

    class Manusia {
        public
        $nama,
        $umur,
        $jenisKelamin,
        $status;

        public function __construct($nama, $umur, $jenisKelamin, $status){
            $this->nama = $nama;
            $this->umur = $umur;
            $this->jenisKelamin = $jenisKelamin;
            $this->status = $status;
        }

        public function perkenalan(){
            return "Halo nama saya $this->nama, usia $this->umur, status $this->status dan saya adalah seorang $this->jenisKelamin";
        }
    }

    $manusia1 = new Manusia("Wiznu", 40, "Laki-laki", "Single");
    $manusia2 = new Manusia("Dg Narang", 17, "Laki-laki", "Married");

    var_dump($manusia1->perkenalan());
    echo "<hr>";
    var_dump($manusia2->perkenalan());

    class Programmer extends Manusia {
        public
        $skill,
        $laptop,
        $pendidikan,
        $project;

        public function __construct($nama, $umur, $jenisKelamin, $status, $skill, $laptop, $pendidikan, $project)
        {
            parent::__construct($nama, $umur, $jenisKelamin, $status);
            $this->skill = $skill;
            $this->laptop = $laptop;
            $this->pendidikan = $pendidikan;
            $this->project = $project;
        }

        public function ngoding(){
            return "Saya $this->nama menggunakan bahasa pemprograman $this->skill, laptop saya adalah $this->laptop, saya mengerjakan project $this->project dan saya adalah lulusan $this->pendidikan";
        }
    }
    
    $programmer1 = new Programmer("Khairul", 17, "laki-laki", "nikah", "PHP, Javascript", "macbook", "Teknik Kimia", "Analisis Proximat");

    echo "<hr>";

    var_dump($programmer1->ngoding());
?>
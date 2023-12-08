<?php
    class Manusia {
        protected
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

    $manusia1 = new Manusia("wisnu", 17, "laki-laki", "single");

    class Programmer extends Manusia {
        protected
        $skill,
        $pendidikan,
        $project;
        
        private 
        $laptop;

        // Konsep Setter.
        public function setLaptop($merk){
            return $this->laptop = $merk;
        }

        // Konsep Getter.
        public function getLaptop(){
            return $this->laptop;
        }

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

    $programmer1 = new Programmer("wisnu", 17, "laki-laki", "single", "PHP", "Macbook", "Teknik Kimia", "HRIS");
    
    var_dump($programmer1->setLaptop("Lenovo"));

    echo "<br>";

    var_dump($programmer1->getLaptop());
    
    // var_dump($programmer1->ngoding());

?>
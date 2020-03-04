<?php
    class Personnel{
        private $code;
        private $nom;
        private $prenom;
        private $Sexe;
        private $Date_Naissance;
        private $Nationalité;
        private $Téléphone;
        private $Email;
        private $Type;

        public function __construct($code,$nom,$prenom,$Sexe,$Date_Naissance,$Nationalité,$Téléphone,$Email,$Type)
        {
            $this->code = $code;
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->Sexe = $Sexe;
            $this->Date_Naissance = $Date_Naissance;
            $this->Nationalité = $Nationalité;
            $this->Téléphone = $Téléphone;
            $this->Email = $Email;
            $this->Type = $Type;

            
        }

// getter et setter yo 
        public function getCode(){
            return $this->code;
        }

        public function getNom()
        {
            return $this->nom;
        }

        public function getPrenom()
        {
            return $this->prenom;
        }

        public function getSexe()
        {
            return $this->Sexe;
        }

        public function getDate_Naissance()
        {
            return $this->Date_Naissance;
        }

        public function getNationalité()
        {
            return $this->Nationalité;
        }

        public function getTéléphone()
        {
            return $this->Téléphone;
        }

        public function getEmail()
        {
            return $this->Email;
        }

        public function getType(){
            return $this->Type;
        }


    }

//foction isertion personel lan 
    function InsertionPersonel($code,$nom,$prenom,$Sexe,$Date_Naissance,$Nationalité,$Téléphone,$Email,$Type){
        $et = new Personnel($code,$nom,$prenom,$Sexe,$Date_Naissance,$Nationalité,$Téléphone,$Email,$Type);
        $t_et = [
            'code'=>$et->getCode(),
            'nom'=>$et->getNom(),
            'prenom'=>$et->getPrenom(),
            'Sexe'=>$et->getSexe(),
            'Date_Naissance'=>$et->getDate_Naissance(),
            'Nationalité'=>$et->getNationalité(),
            'Téléphone'=>$et->getTéléphone(),
            'Email'=>$et->getEmail(),
            'Type'=>$et->getType()
            ];
                            
        $_SESSION['Personnel'][]=$t_et;
        return $_SESSION['Personnel'];
    }


?>
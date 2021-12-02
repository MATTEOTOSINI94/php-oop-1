<?php

class Movie{

   public $nomeFilm;
   public $incasso;
   public $annoUscita;
   public $copertina;
   public $descrizione;

   function __construct($_nomeFilm,$_incasso,$_annoUscita,$_copertina,$_descrizione){
       $this->setNameFilm($_nomeFilm);
       $this->setIncassoFilm($_incasso);
       $this->setAnnoUscita($_annoUscita);
       $this->setPoster($_copertina);
       $this->setTrama($_descrizione);
       
   }

    public function setNameFilm($nome){
        if(empty($nome) || is_numeric($nome)){
            return $this->nomeFilm= "Inserisci un TITOLO";
        }
        $this -> nomeFilm =$nome;
       
    }
    public function setIncassoFilm($incassi){
        if(!strpos($incassi,"$")){
            return;
        }
        $this -> incasso=$incassi;
       
    }
    public function setAnnoUscita($anno){
        $this -> annoUscita=$anno;
       
    }
    public function setTrama($trama){
        if (strlen($trama) < 12){
            return $this-> descrizione= "Insersci una descrizione più approfondita";
        }
        $this -> descrizione=$trama;
    }

    public function setPoster($poster){
        $this->copertina = $poster;
    }

    

    

}


<?php
    
    ini_set('display_errors', 1);



    class Voiture {
        private $_image;
        private $_marque;
        private $_modele;
        private $_couleur;
        private $_poids;
        private $_date;
        private $_kilometre;
        private $_immatriculation;
        


        public function __construct(
            $image,
            $marque,
            $modele,
            $couleur,
            $poids,
            $date,
            $kilometre,
            $immatriculation  
        )
        {
            $this->_image = $image;
            $this->_marque = $marque;
            $this->_modele = $modele;
            $this->_couleur = $couleur;
            $this->_poids = $poids;
            $this->_date = $date;
            $this->_kilometre = $kilometre;
            $this->_immatriculation = $immatriculation;
        }



        public function getMarque()
        {
            return $this->_marque;
        }
        public function getModele()
        {
            return $this->_modele;
        }
        public function getColor()
        {
            return $this->_couleur;
        }
        public function getKilometre()
        {
            return $this->_kilometre;
        }
        public function getDate()
        {
            return $this->_date;
        }
        public function getImage()
        {
            return $this->_image;
        }
        public function categorie()
        {

            if($this->_poids <= 3.4){
               return 'citadine';
                }else{
                return 'Utilitaire';
                }
        }
        public function isAvailable()
        {
            return strtolower($this->_marque) == 'audi' ? 'reservée' : 'libre';
        }
        
        public function isUsage()
        {
            if($this->_kilometre <= 100000){
                $use = 'Faible';
            }elseif($this->_kilometre > 100000 && $this->_kilometre < 200000){
                $use = 'Moyenne';
            }else{
                $use = 'Haute';
            }
            return $use;
        }
        public function rouler()
        {
            $this->_kilometre += 100000;
        }
        public function getYear()
        {
            return strftime('%Y') - $this->_date;
        }
        public function getCountry()
        {
            if(substr(strtoupper($this->_immatriculation), 0, 2) == 'BE'){
                $country = 'Belgique';
            }else if(substr(strtoupper($this->_immatriculation), 0, 2) == 'FR'){
                $country = 'France';
            }else if(substr(strtoupper($this->_immatriculation), 0, 2) == 'DE'){
                $country = 'Allemagne';
            }else{
                $country = "Autre pays";
            }
            return $country;
        }
        public function display()
        {
            echo '<table>
                    <thead>
                        <tr>
                            <th>'.$this->getMarque().' | '.$this->getModele().'</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <img style="width:250px; height:200px;" src="assets/img/'.$this->getImage().'.jpg" alt="Voiture">
                            </td>
                        </tr>
                        <tr>
                            <td>Pays d\'achat: '.$this->getCountry().'</td>
                        </tr>
                        <tr>
                            <td>Kilomètrage: '.$this->getKilometre().'</td>
                        </tr>
                        <tr>
                            <td>Usure: '.$this->isUsage().'</td>
                        </tr>
                        <tr>
                            <td>Catégorie: '.$this->categorie().'</td>
                        </tr>
                        <tr>
                            <td>Couleur: '.$this->getColor().'</td>
                        </tr>
                        <tr>
                            <td>Disponibilité: '.$this->isAvailable().'</td>
                        </tr>
                    </tbody>
                </table>';
        }
    }
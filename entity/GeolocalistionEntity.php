<?php
class GeolocalisationEntity{
     private $id;
     private $lon;
     private $lat;

     function __construct() {
         
     }
     public function getId() {
         return $this->id;
     }

     public function getLon() {
         return $this->lon;
     }

     public function getLat() {
         return $this->lat;
     }

     public function setId($id) {
         $this->id = $id;
     }

     public function setLon($lon) {
         $this->lon = $lon;
     }

     public function setLat($lat) {
         $this->lat = $lat;
     }
     public function __toString() {
         return 'id:'.$this->id.' lat:'.$this->lat.' lon:'.$this->lon;
     }
     
    


}
?>

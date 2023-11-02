<?php

class PodRacing{
    public $racers = array(
                            'Anakin Skywalker',
                            'Dud Bolt',
                            'Ebe Endocott',
                            'Elan Mak',
                            'Gasgano',
                            'Ody Mandrell',
                            'Aldar Beedo',
                            'Ark "Bumpy" Roose',
                            'Ben Quadinaros',
                            'Sebulba',
                            );
    public $tracks = array(
                            'Boonta Training Course',
                            'Mon Gazza Speedway',
                            'Beedo\'s Wild Ride',
                            'Malastare 100',
                            'The Boonta Classic' 
                            );
    
    public function setRace(){
        $track = shuffle($this->tracks)[0];
        foreach($this->racers as $racer){
            echo "Participante " . $racer . " prepare-se";
        }
    }

    public function __construct(){
        if(isset($_POST['pod'])){
            setRace();
        }
    }
}
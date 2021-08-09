<?php
        //Enter your code here, enjoy!

class fake_gps{
        
    const METR_ = (1/111111);
    
    private $latitude;
    private $longtitude;
    private $position;
    
    /*
    «N» или «с. ш.» — северная широта,
    «E» или «в. д.» — восточная долгота.
    Отрицательные знаки координат представляются либо знаком «−», либо буквами:
    
    «S» или «ю. ш.» — южная широта,
    «W» или «з. д.» — западная долгота.
    */
    
    public function __construct(){
        return true;
    }
    
    public function _set_position($lat, $long){
        $this->latitude;
        $this->longtitude;
    }
    
    
    public function _change_position($method){
        switch($method){
            case:'around'
                $this->__get_random_around($radius);
        }
    }
    public setStep($step){ 
        $this->step($step);
    }
    
    protected function __get_random_around($radius){
        $max_la = $this->latitude + $radius;
        $max_lo = $this->longtitude + $radius;
        
        $min_la = $this->latitude - $radius;
        $min_lo = $this->longtitude - $radius;
        
        $max_la = preg_split("/\D/", $max_la);
        $min_la = preg_split("/\D/", $min_la);
        
        $max_lo = preg_split("/\D/", $max_lo);
        $min_lo = preg_split("/\D/", $min_lo);
        
        $rand_la = rand($min_la[0],$max_la[0]).'.'.rand($min_la[1],$max_la[1]);
        $rand_lo = rand($min_lo[0],$max_lo[0]).'.'.rand($min_lo[1],$max_lo[1]);
            
        return ['longitude' => $rand_lo, 'latitude' => $rand_la];
    }
    
    protected function _snake(){
       /*
       (you here)--------------|
       |-----------------------<
       >-----------------------|
       |-----------------------<
       
       you need :
                - step
                - range
       */
       
       return true;
    }

}

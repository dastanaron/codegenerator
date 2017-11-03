<?php

namespace dastanaron\extension;

class CodeGenerator {
    
    public $length = 6;
    public $lat_symbols;
    public $num_symbols;
    
    
    function __construct()
    {
        $this->lat_symbols = ["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"];
        $this->num_symbols = [1,2,3,4,5,6,7,9,0];
    }
    
    public function generate()
    {
        $code = '';
        
        $array_symbols = array_merge($this->lat_symbols, $this->num_symbols);
        
        $length_array = count($array_symbols);
        
        for($i=0; $i<=$this->length; $i++) {
            
            $code .= $array_symbols[rand(0, $length_array)];
            
        }
        
        return $code;
        
    }
       
    
}

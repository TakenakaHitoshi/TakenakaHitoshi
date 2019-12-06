    <?php 
        function calcNumber(int $numberOne, int $numberTwo, bool $bool){
            if($bool === true){
                return $numberOne+$numberTwo; 
            }    
            else{
                return $numberOne-$numberTwo;
            }
        }

        $function = function(int $int, bool $bool){
            if($bool === true){
                return $int * $int; 
            }    
            else{
                return $int * $int * $int;
            }
        };
        function calcAverage(array $array){
            $total = 0;
            foreach ($array as $value){
                $total += $value;           
            };
            $average = $total/count($array);
            return round($average);
        }
        function differenceScore(array $array,array $int){
            $difference = [];
            foreach ($array as $key => $value){
            $difference[$key] =  $value-$int[$key];             
            };
            return $difference;
        }
    ?>
<?php 
    function recursiveCategory($categories, $selected ,$parent = 0, $str ='') {
        foreach($categories as $key => $value) {
            if($value ->parent_id == $parent) {
                if($selected == $value ->id) {
                    echo '<option value="'. $value ->id .'" selected >'. $str. $value ->name .'</option>';
                } else {
                     echo '<option value="'. $value ->id .'">'. $str. $value ->name .'</option>';
                }
               
                unset($categories[$key]);

                recursiveCategory($categories, $selected, $value ->id, $str."--|" );
                
            }
        }
    }

    function recursiveSport($sports, $selected ,$parent = 0, $str ='') {
        foreach($sports as $key => $value) {
            if($value ->parent_id == $parent) {
                if($selected == $value ->id) {
                    echo '<option value="'. $value ->id .'" selected >'. $str. $value ->name .'</option>';
                } else {
                     echo '<option value="'. $value ->id .'">'. $str. $value ->name .'</option>';
                }
               
                unset($sports[$key]);

                recursiveCategory($sports, $selected, $value ->id, $str."--|" );
                
            }
        }
    }

    function recursiveSport_olympic($sports, $selected ,$parent = 0, $str ='') {
        foreach($sports as $key => $value) {
            if($value ->sport ->parent_id == $parent) {
                
                if($selected == $value ->sport ->id) {
                    
                    echo '<option value="'. $value ->sport ->id .'" selected >'. $str. $value ->sport ->name .'</option>';
                } else {
                     echo '<option value="'. $value ->sport ->id .'">'. $str. $value ->sport ->name .'</option>';
                }
                unset($sports[$key]);

                recursiveSport_olympic($sports, $selected, $value ->sport ->id, $str."--|" );
                
            }
        }
    }

?>
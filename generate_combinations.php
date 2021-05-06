<?php
function generate_combinations($data, $no_duplicates = false, &$all = [], $group = [], $value = null, $i = 0, $key = null, $currentGroup = null)
    {
        // Create keys of the array -- to disregard any specific labeling
        $keys = array_keys($data);

        // If there is value, Add it to the group
        if (isset($value) === true) {
            $group[$currentGroup] = $value;
        }

        // Check How deep we are into $data -- If is maxed, ther will not be a deeper level
        if ($i >= count($data)) {
            // Once The Group has the Same Dimension as $data - Push this to $all as a result
            array_push($all, $group);

        } else {
            // There is an additional level
            $currentKey     = $keys[$i];
            
            // Start with the $i defined row
            $rowValues = $data[$currentKey];
                
            if($no_duplicates
            // Add OffSet Everytime we are moving through the $data array dimensions
            $offset = 0;
            if(isset($key) && $currentGroup != $keys[$i]){
                $offset = $key;
            }

            // Iterate Through Current List of Items
            for($pos = $offset; $pos < count($rowValues); $pos++){
                generate_combinations($data, $all, $group, $rowValues[$pos], $i + 1, $pos, $currentKey);
            }
        }
        
        return $all;
    }

<?php

function CommaSeperateMessage($arrayData){
        $linksArray = array_values(array_filter($arrayData)); // Removing the empty elements.
        $count = count($linksArray);
        $secondLastCount = $count - 1;
        $i = 0;
        $allLoadNumber = '';
        while($count > $i){
            if($secondLastCount == $i){
                $allLoadNumber .= $linksArray[$i];
            } else if($secondLastCount > $i){
                $allLoadNumber .= $linksArray[$i].',';
            }

            $i++;
        }
        return $allLoadNumber;
}

$load_number_notexist = [1234,098765,7890,,,98,678,87,];
$loadNumberArray = explode(',', $load_number_notexist);
echo CommaSeperateMessage($loadNumberArray);



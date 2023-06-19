# CommaSeperateMessage


I have string data '1234,098765,7890,,,98,678,87,' and i want output as 1234,098765,7890,98,678,87.
$load_number_notexist = [1234,098765,7890,,,98,678,87,];
$loadNumberArray = explode(',', $load_number_notexist);
$allLoadNumber = CommaSeperateMessage($loadNumberArray);

  ### Input
```
  '1234,098765,7890,,,98,678,87,'
```


  ### Output
````
  1234,098765,7890,98,678,87
````

```
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
$allLoadNumber = CommaSeperateMessage($loadNumberArray);
```

 


<?php
$arr = [
    ["name" =>"mona", "age:"=> 30, "city:" =>"menofia" ],
    [ "name" =>"ahmed", "age:"=> 25, "city: " =>"alex" ],
    [ "name" =>"Ali", "age:"=> 35, "city:" =>"Cairo" ]
];
echo "<style>
            table { 
                width: 60%; 
                margin: 10% auto; 
                text-align: center;  
            }
            th, td { 
                border: 1px solid black; 
                padding: 10px; 
            }
             th{
             background-color:blue; 
             color:white
               }
            
          </style>";


echo "<table border=1>";

 
echo "<thead><tr>";
foreach (array_keys($arr[0]) as $key) {  
    echo "<th>$key</th>";
}
echo "</tr></thead>";
echo "<tbody>";
foreach ($arr as $value) {
    echo "<tr>";
    foreach ($value as $arrValue) {
        echo "<td>$arrValue</td>";
    }
    echo "</tr>";
}
echo "</tbody></table>";
?>
<?php
/*
+---+
| 1 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/

$food = array("Lasagna","Borsch","Ceasar","Tiramisu");

/*
Print every array element in a new line.
*/

// foreach($food as $value){
//     echo $value . "<br>";
// }

echo $food[0] . "<br>";
echo $food[1] . "<br>";
echo $food[2] . "<br>";
echo $food[3] . "<br>";




// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Print the array elements from the previous exercise in unordered list.
<ul>
  <li>...</li>
  <li>...</li>
  <li>...</li>
  <li>...</li>
</ul>
*/

echo "<ul>";
echo "<li>" . $food[0] . "</li>";
echo "<li>" . $food[1] . "</li>";
echo "<li>" . $food[2] . "</li>";
echo "<li>" . $food[3] . "</li>";
echo "</ul>";




// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Turn the indexed array food from task 1 into associative array named food_assoc. 
Every array element of food becomes the key of food_assoc.
Every key of food_assoc has the value that describes the type of food (salad, main course or dessert).
*/

$food_assoc = array("Lasagna"=>"main course", "Borsch"=>"liquid nourishment", "Ceasar"=>"salad", "Tiramisu"=>"desert");

/*
Print every food and type in the separate lines so it renders like this:
pizza | main counrse 
cheesesake | desert 
*/

echo $food[0] ." | ". $food_assoc['Lasagna'] . "<br>";
echo $food[1] ." | ". $food_assoc['Borsch'] . "<br>";
echo $food[2] ." | ". $food_assoc['Ceasar'] . "<br>";
echo $food[3] ." | ". $food_assoc['Tiramisu'] . "<br>";




// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Break down the food_assoc from the task 3 to type (salad, main course, dessert, ...) 
and country of origin (Italy, Spain, India, ...)
food_assoc:
  pizza:
    type: main course
    origin: Italy
  cheesesake: 
    type:desert
    origin: Greece
  
So, food_assoc is still going to be an associative array. 
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself 
and carries the information about the type and origin
*/




// $food_assoc = array(
//     'Lasagna'=>array('main course','Italy'),
//     'Borsch'=>array('liquid nourishment', 'Ukraine'),
//     'Ceasar'=>array('salad', 'Italy'),
//     'Tiramisu'=>array('desert', 'Italy')
//     );



$food_assoc = array(
  "Lasagna" => [
    "type" => "main course",
    "origin" => "Italy"
  ],
  "Borsch" => [
    "type" => "liquid nourishment",
    "origin" => "Ukraine"
  ],
  "Ceasar" => [
    "type" => "salad",
    "origin" => "Italy"
  ],
  "Tiramisu" => [
    "type" => "desert",
    "origin" => "Italy"
  ]
);

/*
Print every food, type and origin in the separate lines so it renders like this:
pizza | main counrse | Italy
cheesesake | desert | Greece
*/

echo key($food_assoc) ." | ". $food_assoc['Lasagna']['type'] ." | ". $food_assoc['Lasagna']['origin'] . "<br>";
next($food_assoc);
echo key($food_assoc) ." | ". $food_assoc['Borsch']['type'] ." | ". $food_assoc['Borsch']['origin'] . "<br>";
next($food_assoc);
echo key($food_assoc) ." | ". $food_assoc['Ceasar']['type'] ." | ". $food_assoc['Ceasar']['origin'] . "<br>";
next($food_assoc);
echo key($food_assoc) ." | ". $food_assoc['Tiramisu']['type'] ." | ". $food_assoc['Tiramisu']['origin'] . "<br>";


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 5 |
+---+
Print the array from task 4 in html table:
<table>
  <tr>
    <th>food</th>
    <th>type</th>
    <th>origin</th>
  </tr>
  <tr>
    <td>pizza</td>
    <td>main course</td>
    <td>Italy</td>
  </tr>
  <tr>
    <td>cheesecake</td>
    <td>desert</td>
    <td>Greece</td>
  </tr>
</table>
*/

?>

<table>
    <tr>
      <th>food</th>
      <th>type</th>
      <th>origin</th>   
    </tr>
    <tr>
      <td><?php echo $food[0]; ?></td>
      <th><?php echo $food_assoc['Lasagna']['type']; ?></th>
      <th><?php echo $food_assoc['Lasagna']['origin']; ?></th>
    </tr>
    <tr>
      <td><?php echo $food[1]; ?></td>
      <th><?php echo $food_assoc['Borsch']['type']; ?></th>
      <th><?php echo $food_assoc['Borsch']['origin']; ?></th>
    </tr>
    <tr>
      <td><?php echo $food[2]; ?></td>
      <th><?php echo $food_assoc['Ceasar']['type']; ?></th>
      <th><?php echo $food_assoc['Ceasar']['origin']; ?></th>
    </tr>
    <tr>
      <td><?php echo $food[3] ?></td>
      <th><?php echo $food_assoc['Tiramisu']['type']; ?></th>
      <th><?php echo $food_assoc['Tiramisu']['origin']; ?></th>
    </tr>
</table>
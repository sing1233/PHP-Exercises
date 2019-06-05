<?php
/*
+---+
| 1 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/

$food = ['Eggs','Pesto','Rice','Butter Chicken'];

/*
Print every array element in a new line.
*/

for($i=0; $i < sizeof($food); $i++)
{
    
    echo $food[$i]."<br>";
}


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
for($i=0; $i < sizeof($food); $i++)
{
    
    echo "<li>{$food[$i]}</li>";
}
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

$food_assoc = [
  "Eggs" => "break fast",
  "Pesto" => "Snack",
  "Rice" => "Lunch",
  "Butter Chicken" => "Dinner"
];

/*
Print every food and type in the separate lines so it renders like this:
pizza | main counrse 
cheesesake | desert 
*/

foreach($food_assoc as $name=>$type)
{
    echo "{$name} | {$type} <br>";
}


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
$food_assoc = [
  "Eggs" => [
    "type" => "break fast",
    "origin" => "India"
  ],
  "Pesto" => [
    "type" => "Snack",
    "origin" => "Greece"
  ],
    "Rice" => [
    "type" => "Lunch",
    "origin" => "India"
  ],
    "Butter Chicken" => [
    "type" => "Dinner",
    "origin" => "India"
  ]
];

/*
Print every food, type and origin in the separate lines so it renders like this:
pizza | main counrse | Italy
cheesesake | desert | Greece
*/


foreach($food_assoc as $name=>$type)
{
    echo "{$name} | {$type['type']} | {$type['origin']} <br>";
}



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
echo "<table>
  <tr>
    <th>food</th>
    <th>type</th>
    <th>origin</th>
  </tr>";
foreach($food_assoc as $name=>$type)
{
    echo "<tr>";
    echo "<td>{$name} </td>
         <td> {$type['type']}</td>
         <td> {$type['origin']} </td>";
    echo "</tr>";
}
echo "</table>";
?>
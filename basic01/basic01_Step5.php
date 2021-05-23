<?php

$course_name = 'React Native';
$enrolled_students = 24;
$price = 30;
$discount= true;

echo "Course title: ",$course_name,"mmm" ;
echo "<br>";
echo "Enrolled Students : $enrolled_students ";
echo "<br>";
echo "Course price :  $price";
echo "<br>";
if ($discount ==true){
    echo "Course on discount :  Yes";
}
else {
    echo "Course on discount :  No";
}


?>
<?php
$location = "Earth";
$age = 20;
$name = "Sam";    
    echo "Hello, world \n" ;
    print "Hello, world 2 \n";
    printf("Hello, from $location, I am $name and age is $age \n");
    //store the formated string in a variable
    printf("Hello, from %s, I am %s and age is %d \n", $location, $name, $age);

    $result = sprintf("Hello, from %s, I am %s and age is %d", $location, $name, $age);
    print $result;
<?php
$int_var = 12345;
$another_int = -12345 + 12345;
if (TRUE)
print("<br>This will always print<br>");
else
print("This will never print<br>"); // some errors
$many = 2.2888800;
$many_2 = 2.2111200;
$few = $many + $many_2;
print($many + $many_2 = $few);
$true_num = 3 + 0.14159;
$true_str = "<br>Tried and true";
$true_array[49] = "<br>An array element";
$false_array = array();
$false_null = NULL;
$false_num = 999 - 999;
$false_str = "";
print ($true_num);
print ($true_str);
//print ($true_array); error 1
//print ($false_array); error 2
print ($false_null);
print ($false_num);
print ($false_str);
$string_1 = "This is a string in double quotes";
$string_2 = "This is a somewhat longer, singly quoted string";
$string_39 = "This string has thirty-nine characters";
$string_0 = "";
$variable = "name";
$literally = '<br>My $variable will not print!\\n';
print($literally);
$literally = "<br>My $variable will print!\\n";
print($literally);
$x = 4;
function assignx () {
$x = 0;
print "<br>\$x inside function is $x. ";
}
assignx();
print "<br>\$x outside of function is $x. ";
function multiply ($value) {
    $value = $value * 10;
    return $value;
   }
   $retval = multiply (10);
   Print "Return value is $retval\n";
   $somevar = 15;
   function addit() {
   GLOBAL $somevar;
   $somevar++;
   print "Somevar is $somevar";
   }
   addit();
   function keep_track() {
    STATIC $count = 0;
    $count++;
    print $count;
    print "";
   }
   keep_track();
   keep_track();
   keep_track();
?>
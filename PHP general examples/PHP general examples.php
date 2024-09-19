PHP echo and print - 
echo means :  echo is a command that outputs the strings that are passed to it as arguments.
print means : The print() function outputs one or more strings.
Note: The print() function is not actually a function, so you are not required to use parentheses with it.

1. Display strings with the echo command 
<!DOCTYPE html>
<html>
<body>
<?php
echo "<h2>PHP</h2>";
echo "ok<br>";
echo "Just saying<br>";
echo "this ", "one ", "is ", "PHP .";
?> 
</body>
</html>


2. Display string and variables with the echo command 
<!DOCTYPE html>
<html>
<body>
<?php
$txt1 = "PHP file";
$txt2 = "PHP folder";
print "<h2>$txt1</h2>";
print "<p>Choose PHP at $txt2</p>";
?>
</body>
</html>

3. Display strings with print command - 
<!DOCTYPE html>
<html>
<body>
<?php
print "<h2>PHP concept</h2>";
print "ok<br>";
print "thats it";
?> 
</body>
</html>

4. Display strings and variable with print command - 
<!DOCTYPE html>
<html>
<body>
<?php
$txt1 = "PHP file";
$txt2 = "PHP folder";
print "<h2>$txt1</h2>";
print "<p>Choose PHP at $txt2</p>";
?>
</body>
</html>

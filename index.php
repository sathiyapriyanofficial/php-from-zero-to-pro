<?php
/*

Basic Syntax 
- PHP can have JS, HTML, CSS 
- Open and closing tag can interpreted as PHP. 

*/

/*

Print vs Echo 
- Print returns value of 1
- Echo is faster than Print. 
- You can not do concat with print. 

*/

echo print "Hello World";

echo "Hello", " ", "World";

// Single Quote vs Double Quotes 

echo 'Sathiyapriyan\'s special name is';

echo "Sathiyapriyan's special name is";

/*
Variable 

- Start with $
- cannot start with number, special characters except _
- cannot assign a reserved words(keywords)

*/

$x = 1; // assign by value
$y = &$x; // assign by reference
$y = 8;

print($x);
print($y);

// Variables within text

$first_name = 'Sathiyapriyan';
$last_name = 'Chinnasamy';

echo "<br>";

echo "Hello {$first_name} \n"; // readable 
echo "Hello " .  $last_name; // readable 

/*
PHP In HTML 
<?=  "Hello World" ?>
*/

/*

Comment 
- Readability.
- Understanding the code. 
- Doc block  /** */
/*/

*/
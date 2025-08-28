# Small PHP and Docker project
## PHP Basics
- PHP stands for "PHP: Hypertext Preprocessor
- It’s a server-side language: code runs on the server, and the result (usually HTML) is sent to the browser

### PHP file basics
- A PHP file usually ends with .php.
- You embed PHP in HTML using <?php ... ?>

### Variables
- Start with $ sign.

### Data types
- String ("hello")
- Integer (25)
- Float (3.14)
- Boolean (true/false)
- Array ([1,2,3])
- Object (classes)
- NULL

### Conditions
<pre>  
  <?php
$age = 18;
if ($age >= 18) {
  echo "You’re an adult";
} else {
  echo "You’re a minor";
}
?>
</pre>

### Loops

<pre> 
  While loop
$i = 1;
while ($i <= 5) {
  echo $i;
  $i++;
}

For loop
for ($j = 1; $j <= 5; $j++) {
  echo $j;
}
</pre>

### Functions

<pre>
  <?php
function greet($name) {
  return "Hello, $name!";
}
echo greet("Ntanga");
?>
</pre>

### Arrays

<pre>
  $fruits = ["Apple", "Banana", "Mango"];
echo $fruits[0];

foreach ($fruits as $fruit) {
  echo $fruit;
}

</pre>
  

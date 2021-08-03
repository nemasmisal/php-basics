<?php
$name = 'yoshi'; // equal to let in JS
define('NAME', 'Mario'); //equial to const in JS
echo $name . NAME; //concatenate string with . (dot)
echo "Hey this is how i do interpolation $name";
echo $name[9]; //get characters in position 9
strlen($name); //return length of the given string
strtoupper($name); //return string in upper case
strtolower($name); //return to lower case
str_replace('m', 'w', $name); //replacing any 'm' with 'w' 
floor(3.21); // equal to Math.floor
ceil(3.21); //Math.ceil
echo 'test' < 'pest'; //comparing order of the first letter in alphabet
echo 'lower' < 'Upper'; // uppercase letter are less then lower case 
$blogs = [1, 2, 3, 4, 5];
foreach ($blogs as $blog) {
  echo $blog;
}
for ($i = 0; $i < count($blogs); $i++) {
  echo 'I is: ' . $i . '<br />';
}
$i = 0;
while ($i < count($blogs)) {
  echo $blogs[$i];
  echo '<br />';
  $i++;
}

?>
<!DOCKTYPE html>
  <html>

  <head>
    <title>My php file</title>
  </head>

  <body>
    <ul>
      <?php foreach ($blogs as $blog) { ?>
        <li> <?php echo $blog; ?></li>
      <?php } ?>
    </ul>

  </body>

  </html>
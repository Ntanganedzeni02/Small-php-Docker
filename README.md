# Small PHP and Docker project
- This is a simple CRUD (Create, Read, Update, Delete) web application built with PHP and MySQL, running inside Docker containers. The project uses Bootstrap for basic styling.

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


## Clone the repository
<pre>
  git clone <your-repo-url>
  cd Small-php-Docker
</pre>

## Docker Setup
- Make sure you have Docker and Docker Compose installed.
- tart the containers: docker compose up --build
- PHP web server will run on http://localhost:8080
- MySQL database will run inside Docker.

## Create Database Table
- Access MySQL inside the container: docker exec -it small-php-docker-db-1 mysql -uuser -puserpassword
- Then run:
<pre>
  USE crud_db;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL
);

EXIT;
</pre>

## Database Connection
- db.php contains the connection:
<pre>
  <?php
$mysqli = new mysqli("db", "user", "userpassword", "crud_db");

if ($mysqli->connect_errno) {
    die("Failed to connect to MySQL: " . $mysqli->connect_error);
}
?>
</pre>

## CRUD PHP Files

- index.php → List users
- create.php → Add a user
- update.php → Edit a user
- delete.php → Delete a user

## Access the App
- Open your browser: http://localhost:8080
  

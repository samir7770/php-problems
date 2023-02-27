<?php
// ===================
// Task 2: Basic OOP in PHP
// ===================

// Define the Person class in a namespace
namespace MyApp;

class Person {
    public $name;
    public $email;

    function setName( $name ) {
        $this->name = $name;
    }
    function getName() {
        return $this->name;
    }
    function setEmail( $email ) {
        $this->email = $email;
    }
    function getEmail() {
        return $this->email;
    }
}

// ===================
// Task 3: Superglobal Variables in PHP
// ===================

// Check if the form has been submitted
if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {

    // Retrieve the name and email values from the form
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Create a new instance of the Person class and set the name and email properties
    $person = new Person();
    $person->setName( $name );
    $person->setEmail( $email );

    // Display the name and email properties
    echo "Name: " . $person->getName() . "<br>";
    echo "Email: " . $person->getEmail() . "<br>";
}

?>

<!-- ===================
Task 1: HTML Basics
=================== -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 3</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <form action="" method="POST">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" placeholder="Enter your name"><br><br>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Enter your email"><br><br>
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>
<?php
// Include the Book class
include 'Book.php';

// Create Book objects
$book1 = new Book("To Kill a Mockingbird", "Harper Lee", 1960);
$book2 = new Book("1984", "George Orwell", 1949);
$book3 = new Book("The Great Gatsby", "F. Scott Fitzgerald", 1925);

// Display book information
echo $book1->getInfo() . "\n";
echo $book2->getInfo() . "\n";
echo $book3->getInfo() . "\n";
?>
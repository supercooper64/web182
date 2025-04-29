<?php
// Include the Book class
include 'Book.php';

// Create an array of Book objects
$books = [
    new Book("To Kill a Mockingbird", "Harper Lee", 1960),
    new Book("1984", "George Orwell", 1949),
    new Book("The Great Gatsby", "F. Scott Fitzgerald", 1925)
];

// Display book information
foreach ($books as $book) {
    echo $book->getInfo() . "\n";
}
?>
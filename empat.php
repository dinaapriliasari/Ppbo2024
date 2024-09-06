<?php
// Memasukkan file yang berisi class dengan require_once
require_once 'Author.php';
require_once 'Book.php';
require_once 'Publisher.php';

// Contoh Penggunaan
$author = new Author("J.K. Rowling", "Famous author of Harry Potter series");
$publisher = new Publisher("Bloomsbury", "London", "123456789");

$book = new Book(1234567890, "Harry Potter", "A magical story", "Fantasy", "English", 500, $author->name, $publisher->name);

// Tampilkan detail buku
print_r($book->showAll());

// Dapatkan nomor telepon penerbit
echo $publisher->getPhone();
?>
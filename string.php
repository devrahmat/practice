<?php
$strings = ["Hello", "World", "PHP", "Programming"];

foreach($strings as $string){
    $viowel_count = preg_match_all("/[aeiou]/i",$string);
    $reverse = strrev($string);
    echo "<pre>Original String:{$string}, Vowel Count: {$viowel_count}, Reversed String:{$reverse}</pre>";
}



class Book {
    private $title;
    private $availableCopies;

    public function __construct($title, $copies) {
        $this->title = $title;
        $this->availableCopies = $copies;
    }

    public function borrowBook() {
        if ($this->availableCopies > 0) {
            $this->availableCopies--;
            echo "Book borrowed: " . $this->title . "\n";
        } else {
            echo "Sorry, no copies of '" . $this->title . "' are available.\n";
        }
    }

    public function returnBook() {
        $this->availableCopies++;
        echo "Book returned: " . $this->title . "\n";
    }

    public function getAvailableCopies() {
        return $this->availableCopies;
    }

    public function getTitle() {
        return $this->title;
    }
}

class Member {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function borrowBook(Book $book) {
        echo $this->name . " is borrowing the book: " . $book->getTitle() . "\n";
        $book->borrowBook();
    }

    public function returnBook(Book $book) {
        echo $this->name . " is returning the book: " . $book->getTitle() . "\n";
        $book->returnBook();
    }
}

// Create books
$book1 = new Book("Book One", 3);
$book2 = new Book("Book Two", 2);

// Create members
$member1 = new Member("Member One");
$member2 = new Member("Member Two");

// Member One borrows Book One
$member1->borrowBook($book1);
echo "Available copies of '" . $book1->getTitle() . "': " . $book1->getAvailableCopies() . "\n";

// Member Two borrows Book Two
$member2->borrowBook($book2);
echo "Available copies of '" . $book2->getTitle() . "': " . $book2->getAvailableCopies() . "\n";

// Member One returns Book One
$member1->returnBook($book1);
echo "Available copies of '" . $book1->getTitle() . "': " . $book1->getAvailableCopies() . "\n";

// Member Two returns Book Two
$member2->returnBook($book2);
echo "Available copies of '" . $book2->getTitle() . "': " . $book2->getAvailableCopies() . "\n";



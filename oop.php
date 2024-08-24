<?php
class Book {
    
    // TODO: Add properties as Private
   private $title;
    private $availableCopies;
   
    public function __construct($title, $availableCopies) {   
   
        // TODO: Initialize properties
        $this->title = $title;
        $this->availableCopies = $availableCopies;
   
    }   
   
   // TODO: Add getTitle method
   
   public function getTitle(){
    return $this->title;
   }
       
    // TODO: Add getAvailableCopies method
    public function getAvailableCopies(){
        return $this->availableCopies;
    }
   
    // TODO: Add borrowBook method
   
    public function borrowBook(){
        if($this->availableCopies > 0){
            $this->availableCopies--;
        }else{
            echo "This book not available right now";
        }
    }
    
   // TODO: Add returnBook method
    public function returnBook(){
        $this->availableCopies++;
    }
   
}
     
  
   class Member {
   
        // TODO: Add properties as Private
        private $name;    
    
        public function __construct($name) {    
    
            // TODO: Initialize properties
           $this->name = $name;
    
        }
    
        // TODO: Add getName method
        public function getName(){
            return $this->name;
        }
    
        // TODO: Add borrowBook method
        public function borrowBook(Book $book){
            $book->borrowBook();
        }
    
        // TODO: Add returnBook method
        public function returnBook(Book $book){
            $book->returnBook();
        }       
    }
    $members1 = new Member("John Doe");
    $members2 = new Member("Jane Smith");

    $books1 = new Book("The Great Gatsby", 5);
    $books2 = new Book("To Kill a Mockingbird", 3);

// Usage


$members1->borrowBook($books1);
echo "Available Copies of ' {$books1->getTitle()}' :{$books1->getAvailableCopies()}.</br>";

$members2->borrowBook($books2);
echo "Available Copies of ' {$books2->getTitle()}' :{$books2->getAvailableCopies()}.</br>";









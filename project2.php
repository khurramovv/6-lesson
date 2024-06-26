<?php
class Book {
    public $title;
    public $author;
    public $genre;
    public $price;

    public function __construct($title, $author, $genre, $price) {
        $this->title = $title;
        $this->author = $author;
        $this->genre = $genre;
        $this->price = $price;
    }

    public function getBookInfo() {
        return "Kitob: " . $this->title . " - Muallif: " . $this->author . " - Janr: " . $this->genre . " - Narxi: $" . $this->price;
    }
}

$book1 = new Book("1984", "George Orwell", "Dystopian", 12.99);

echo $book1->getBookInfo();
?>

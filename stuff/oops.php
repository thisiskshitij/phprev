<?php
class Book {
    private $title;
    private $author;
    private $price;

    public function __construct($title, $author, $price) {
        $this->setTitle($title);
        $this->setAuthor($author);
        $this->setPrice($price);
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function setAuthor($author) {
        $this->author = $author;
    }

    public function setPrice($price) {
        if ($price < 0) {
            throw new Exception("Price cannot be negative.");
        }
        $this->price = $price;
    }

    public function getDetails() {
        return "Title: $this->title, Author: $this->author, Price: $this->price";
    }
}

try {
    $book = new Book("PHP Guide", "John Doe", 25);
    echo $book->getDetails();
} catch (Exception $e) {
    echo $e->getMessage();
}
?>

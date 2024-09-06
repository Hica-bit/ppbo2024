<?php
class Book
{
    public $ISBN;
    public $title;
    public $description;
    public $category;
    public $languange;
    public $numberOfPage;
    public $author;
    public $publisher;

    public function __construct($ISBN, $title, $description, $category, $languange, $numberOfPage, $author, $publisher)
    {
        $this->ISBN = $ISBN;
        $this->title = $title;
        $this->description = $description;
        $this->category = $category;
        $this->languange = $languange;
        $this->numberOfPage = $numberOfPage;
        $this->author = $author;
        $this->publisher = $publisher;
    }

    public function showAll()
    {
        return [
            'ISBN' => $this->ISBN,
            'title' => $this->title,
            'description' => $this->description,
            'category' => $this->category,
            'languange' => $this->languange,
            'numberOfPage' => $this->numberOfPage,
            'author' => $this->author,
            'publisher' => $this->publisher,
        ];
    }

    public function detail($ISBN)
    {
        if ($this->ISBN === $ISBN) {
            return [
                'ISBN' => $this->ISBN,
                'title' => $this->title,
                'description' => $this->description,
                'category' => $this->category,
                'languange' => $this->languange,
                'numberOfPage' => $this->numberOfPage,
                'author' => $this->author,
                'publisher' => $this->publisher,
            ];
        } else {
            echo "ISBN tidak valid.";
        }
    }
}
<?php
class Author
{
    public $name;
    public $description;

    public function __construct($name, $description)
    {
        $this->name = $name;
        $this->description = $description;
    }

    public function show($film)
    {
        return [
            'name' => $this->name,
            'description' => $this->description,
        ];
    }
}

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

class Publisher
{
    public $name;
    public $address;
    public $phone;

    public function __construct($name, $address, $phone)
    {
        $this->name = $name;
        $this->address = $address;
        $this->phone = $phone;
    }

    public function setPhone($phone)
    {
        if (is_int($phone)) {
            $this->phone = $phone;
        } else {
            echo "Nomor telepon tidak valid.";
        }
    }

    public function getPhone()
    {
        return $this->phone;
    }
}
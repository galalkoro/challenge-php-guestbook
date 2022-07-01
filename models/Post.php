<?php
class Post{
    private $title;
    private $date;
    private $Content;
    private $author;


    /**
     * @param $title
     * @param $date
     * @param $Content
     * @param $author
     */
    public function __construct($title, $date, $Content, $author)
    {
        $this->title = $title;
        $this->date = $date;
        $this->Content = $Content;
        $this->author = $author;
    }


    public function getTitle()
    {
        return $this->title;
    }


    public function getDate()
    {
        return $this->date;
    }


    public function getContent()
    {
        return $this->Content;
    }


    public function getAuthor()
    {
        return $this->author;
    }



}
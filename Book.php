<?php
class Book{
    private string $isbn;
    private string $title;
    private string $author;
    private string $available;

    public function __construct(string $isbn, string $title, string $author, int $available){
        $this->isbn = $isbn;
        $this->title = $title;
        $this->author = $author;
        $this->available = $available;
    }

    public function getIsbn() : string {
        return $this->isbn;
    }

    public function getTitle() : string {
        return $this->title;
    }

    public function getAuthor() : string {
        return $this->author;
    }

    public function getAvailable() : bool {
        return $this->available;
    }

    public function setIsbn(string $isbn) : void {
        $this->isbn = $isbn;
    }

    public function setTitle(string $title) : void {
        $this->title = $title;
    }

    public function setAuthor(string $author) : void {
        $this->author = $author;
    }

    public function setAvailable(bool $available) : void {
        $this->available = $available;
    }

    public function getCopy() : bool{
        if($this->available > 0){
            $this->available = $this->available - 1;
            return true;
        }
        else return false;
    }

    public function addCopy($num) : bool{
        $this->available = $this->available + $num;
    }

    public function __toString(){
        $details= 
        "</br>ISBN: ".$this->isbn."</br>".
        "Title: ".$this->title."</br>".
        "Author: ".$this->author."</br>".
        "Available: ".$this->available;

        return $details;
    }

    public function __call($method, $value){
        return "This method doesn't exist.";
    }

    public function __get($var_name){
        if(property_exists(__CLASS__, $var_name)){
            return $this->{$var_name};
        }
        return "\nSorry, this property doesn't exist.";
    }

    public function __set($var_name, $value){
        if(property_exists(__CLASS__, $var_name)){
            $this->{$var_name} = $value;
        }
        return "\nSorry, this property doesn't exist.";
    }
}
?>

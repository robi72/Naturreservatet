<?php

abstract class animal   {
    abstract function makeSound();
    protected $name;

}

class Apa extends animal    {
    function __construct($name)    {
        $this->name = $name;
    }

    public function printImage() {
        echo "<img src='./bilder/monkey.jpg'onclick='alert(\"". $this->makeSound() ."\")' height='100' width='100'/><br>";
    }
    public function makeSound() {
        return "hhhhhhh";
    }
}
class Tiger extends animal    {
    function __construct($name)    {
        $this->name = $name;
    }
    public function printImage() {
        echo "<img src='./bilder/tiger.jpg' onclick='playAudio(\"". $this->makeSound() ."\")' height='100' width='100'/><br>";
    }
    function makeSound()    {
        return "arghhhhhhhh";
    }
}
class Giraffe extends animal    {
    function __construct($name)    {
        $this->name = $name;
    }
    public function printImage() {
        echo "<img src='./bilder/giraffe.jpg' onclick='playAudio(\"". $this->makeSound() ."\")' height='100' width='100'/><br>";
    }
    function makeSound()    {
        return "hmrrrmm";
    }
}

class Coconut extends animal  {
    function __construct($name)    {
        $this->name = $name;
    }
    public function printImage() {
        echo "<img src='./bilder/coconut.jpg' onclick='playAudio(\"". $this->makeSound() ."\")' height='100' width='100'/><br>";
    }

    function makeSound()    {
        return "bupp";
    }
}

?>
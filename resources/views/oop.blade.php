<?php

//encapsulation
// class Car
// {
//     private $model;

//     public function setModal($model)
//     {
//         $this->model = $model;
//     }

//     public function getModal()
//     {
//         return $this->model;
//     }
// }

// $car = new Car();
// $car->setModal('Lambo');

// echo $car->getModal();

// inheritance
// class Animal
// {
//     public function eating(): string
//     {
//         return 'Animal is eating';
//     }
// }

// class Dog extends Animal
// {
//     public function barking(): string
//     {
//         return 'Dog is barking';
//     }
// }

// $dog = new Dog();
// echo $dog->barking();
// echo $dog->eating();

// polymorphism
interface Shape
{
    public function calculateArea();
}

class Circle implements Shape
{
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function calculateArea(): float
    {
        return pi() * $this->radius * $this->radius;
    }
}

class Rectangle
{
    private $length;
    private $width;

    public function __construct($length, $width)
    {
        $this->length = $length;
        $this->width = $width;
    }

    public function calculateArea(): float
    {
        return $this->length * $this->width;
    }
}

// $rectangle = new Rectangle(10, 5.5);
// echo $rectangle->calculateArea();

$circle = new Circle(10);
echo number_format($circle->calculateArea(), 2);

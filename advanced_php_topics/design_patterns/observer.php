<?php

interface Observer
{
    public function update($message);
}

class ConcreteObserver implements Observer
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function update($message)
    {
        echo $this->name . " received message: " . $message . "\n";
    }
}

class Subject
{
    private $observers = [];

    public function addObserver(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    public function notifyObservers($message)
    {
        foreach ($this->observers as $observer) {
            $observer->update($message);
        }
    }
}

// Usage
$subject = new Subject();
$observer1 = new ConcreteObserver('Observer 1');
$observer2 = new ConcreteObserver('Observer 2');

$subject->addObserver($observer1);
$subject->addObserver($observer2);

$subject->notifyObservers('Hello Observers!');
// Output:
// Observer 1 received message: Hello Observers!
// Observer 2 received message: Hello Observers!

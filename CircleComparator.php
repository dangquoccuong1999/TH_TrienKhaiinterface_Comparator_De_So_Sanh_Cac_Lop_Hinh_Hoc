<?php
include 'Comparator.php';
include 'Circle.php';


class CircleComparator extends Circle implements Comparator
{
    public function __construct($radius, $name)
    {
        parent::__construct($radius, $name);
    }

    public function compare($circleOne, $circleTwo)
    {
        $radiusOne = $circleOne->getRadius();
        $radiusTwo = $circleTwo->getRadius();

        if ($radiusOne > $radiusTwo) {
            return 1;
        } else if ($radiusOne < $radiusTwo) {
            return -1;
        } else {
            return 0;
        }
    }
}

$circleOne = new Circle(10, 'circleOne');
$circleTwo = new Circle(10, 'circleTwo');
$circleComparator = new CircleComparator(12, 'tron');
echo ($circleComparator->compare($circleOne, $circleTwo));

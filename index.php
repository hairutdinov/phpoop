<?php
require_once __DIR__."/vendor/autoload.php";

use App\Book;
use App\models\Car;
use classes\Move;
use library\Lib;

$move = new Move();
echo nl2br(PHP_EOL);
$library = new Lib();

echo nl2br(PHP_EOL);

$book = new Book();
echo "Book pages: $book->page";

echo nl2br(PHP_EOL);

$car = new Car();
echo "Car wheels: $car->wheels";

//$today = Carbon::now();
//var_dump($today);
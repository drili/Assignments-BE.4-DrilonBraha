<?php
      include_once "includes/sellable_interface.php";
      include_once "includes/television_class.php";
      include_once "includes/tennisball_class.php";
      include_once "includes/storemanager_class.php";
      include_once "includes/golfball_class.php";
?>

<!DOCTYPE html>
<html>
      <head>
            <meta charset="utf-8">
            <title>Assignments BE.4</title>
      </head>

      <body>
            <header>
                  <h1>Assignment BE.0.1</h1>
                  <h3>Drilon Braha, 12-09-2018, hej</h3>
            </header>

            <br>
            <h1>GolfBall:</h1>

            <?php
            // $tv = new Television();
            // $tv->setScreenSize(42);

            $ball = new GolfBall();
            $ball->setColor('white');
            $ball->setIndentSize(250);

            $manager = new StoreManager();
            // $manager->addProduct($tv);
            $manager->addProduct($ball);
            $manager->stockUp();

            printf("<p>There are %s %s golfballs in stock.</p>\n"
            , $ball->getStockLevel()
            , $ball->getColor());

            print("<p>Selling two tennis balls...</p>\n");
            $ball->sellItem();
            $ball->sellItem();

            printf("<p>There are now %s %s golfballs in stock, and the sizes of the golfballs %s</p>\n"
            , $ball->getStockLevel()
            , $ball->getColor()
            , $ball->getIndentSize());;
            ?>
      </body>
</html>

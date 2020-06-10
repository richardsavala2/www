<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
        class Book {
          var $title;
          var $author;
          var $pages;

          function __construct($aTitle, $aAuthor, $aPages){
            $this->title = $aTitle;
            $this->author = $aAuthor;
            $this->pages = $aPages;
          }
        }

        $book1 = new Book("Stucture and Interpretation of Computer Programs", "Harold Abelson and Gerald Jay Sussman with Julie Sussman", "883");
        $book2 = new Book("Learn Python 3 the Hard Way", "Zed A. Shaw", "321");
        $book3 = new Book("The Pragmatic Programmer", "Andrew Hunt and David Thomas", "361");

        echo "<h1>Rick's List of Programming Resources</h1>";
        echo "<hr>";
        echo "<br>";
        echo $book1->title;
        echo "<br>";
        echo $book1->author;
        echo "<br>";
        echo $book1->pages;
        echo "<br></br>";
        echo $book2->title;
        echo "<br>";
        echo $book2->author;
        echo "<br>";
        echo $book2->pages;
        echo "<br></br>";
        echo $book3->title;
        echo "<br>";
        echo $book3->author;
        echo "<br>";
        echo $book3->pages;
        echo "<br></br>";
     ?>

  </body>
</html>

<?php 
  class movie{
    private $title;
    private $author;
    private $year;
    private $genere;

    function __construct($_title,$_author,$_year,$_genere){
      $this->title = $_title;
      $this->author = $_author;
      $this->year = $_year;
      $this->genere = $_genere;
    }

    public function getTitle(){
      return $this->title;
    }

    public function getAuthor(){
      return $this->author;
    }

    public function getYear(){
      return $this->year;
    }

    public function getGenere(){
      return $this->genere;
    }

    public function getAllInformation(){
      return $this->title .' - ' .$this->author .' - ' .$this->year .' - ' .$this->genere;
    }
  }

  $batman = new movie('Batman','Mario Rossi', 2002,'azione');
  $spiderman = new movie('Spiderman', 'Franco Verdi', 2008, 'azione');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <ul>
    <li>
      <?php echo $batman->getAllInformation() ?>
    </li>
    <li>
      <?php echo $spiderman->getAllinformation() ?>
    </li>
  </ul>
</body>
</html>
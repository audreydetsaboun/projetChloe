<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cours PHP</title>
</head>
<body>
    <h1>Hello</h1>

    <?php 
        //include('humain.class.php');

        class Humain{
            private $nom;
    
            public function setNom($nouveauNom){
                $this->nom = $nouveauNom;
            }
    
            public function getNom(){
                return $this->nom;
            }
        }

        $pierre = new Humain();
        
        $pierre->setNom = ('Pierre');
        echo $pierre->getNom();
    ?>
</body>
</html>
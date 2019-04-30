<html>
    <p>bonjour
    <?php
var_dump($_POST);

if(isset($_POST['nom'])){
    return $_POST['nom'];
    echo $_POST['nom'];
}

    print_r ($_POST);
        echo $_POST['nom'];
    ?>
    , fais comme chez toi !
    </p>
</html>
<?php
    //exercice1
    if (isset($_GET['lastname']) && isset($_GET['firstname']))
        echo "Bonjour" . $_GET['lastname'] . " " . $_GET['lirstname'];
    
    else
        echo "Les parametre ne coresponde pas.";
?>

<?php
    //exercice2
    if (isset($_GET['age']))
        echo $_GET['age'];
    
    else
        echo "vous n'avez pas indiquer votre age.";
?>

<?php
    //exercice3
    if (isset($_GET['startDate']) && isset($_GET['endDate']))
        echo $_GET['startDate'] . " " . $_GET['endDate'];
    
    else
        echo "Les parametre ne coresponde pas.";
?>

<?php
    //exercice4
    if (isset($_GET['language']) && isset($_GET['server']))
        echo $_GET['language'] . " " . $_GET['server'];
    
    else
        echo "Les parametre ne coresponde pas.";
?>

<?php
    //exercice5
    if (isset($_GET['week']))
        echo $_GET['week'];
    
    else
        echo "Les parametre ne coresponde pas.";
?>

<?php
    //exercice6
    if (isset($_GET['building']) && isset($_GET['room']))
        echo $_GET['building'] . $_GET['room'];
    
    else
        echo "Les parametre ne coresponde pas.";
?>
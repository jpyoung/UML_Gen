<!DOCTYPE html>

<html>
<head>
    <title>UML_Algo Test</title>
</head>

<body>
    <h3>Tester Main - UML Generator Converter</h3>
    
    
    <?php 
    
    require 'UML_Algo.php';
    
    $uml_algo = new UML_Algo("Java_Test_Files/outer.java");

    $produced_uml_table = $uml_algo->generate_uml();
    
    echo $produced_uml_table;
    
    
    ?>
    
    
    
</body>
</html>




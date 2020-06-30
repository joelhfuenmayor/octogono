<body bgcolor="#008080">
<?php

if (!isset($_POST["control"])){

    ?>

        <h3> Herramienta para calcular área de un octágono </h3>
        <form method="post" action="index.php">
                <input type="hidden" name="control" value="12345">
                Lado:<input type="number" step="any" name="Lado" ><br>
                
                Apotema:<input type="number" step="any" name="Apotema"><br>
                <input type="submit" step="any" value="Calcular">
</form>

<?php
}
else {
        $Lado = $_POST["Lado"];
        $Apotema =$_POST["Apotema"];
        $Area = (4*$Lado * $Apotema);
        echo "<h3>Resultado</h3>";
        echo "Lado = $Lado <br>";
        echo "Apotema = $Apotema <br>";
        echo "Area = $Area <br>";
        echo "<a href='index.php'>Nuevo Calculo</a>";

}
?>
</body>
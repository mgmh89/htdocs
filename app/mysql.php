<html>
  <body>
    <?php
    function Conectarse() {
      if (!($link=mysql_connect("localhost","root","destiny"))) {
        echo "Error conectando a la base de datos.";
        exit();
      }
      if (!mysql_select_db("blogger",$link)) {
        echo "Error seleccionando la base de datos.";
        exit();
      }
      echo "Conexion con la base de datos conseguida.<br>";
      return $link;
    }
    $link=Conectarse();
    mysql_close($link);
    echo "Conexion con la base de datos cerrada.<br>Fin.";
    ?>
  </body>
</html>
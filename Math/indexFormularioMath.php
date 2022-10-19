<?php
include "cabeceraHTML.php";
cabecera("Formulario Math.");
?>
        <form action="procesaMath.php" method="GET">
            <!--Campo de texto-->
            <p>Deme un número: <input type="text" placeholder="número" name="dato1" pattern="*?[0-9]" title="Debe ser un número."/></p>
            <p>Deme otro número: <input type="text" placeholder="número" name="dato2" pattern="*?[0-9]" title="Debe ser un número."/></p>
            <!--Select o menú desplegable-->
            <select name="menu1">
                <option value="A">Suma</option>
                <option value="B">Resta</option>
                <option value="C">Multiplicación</option>
                <option value="D">División</option>
                <option value="E">Módulo</option>
                <option value="F">Elevado a</option>
            </select>
            <br />
            <br /><br />
            <input type="submit" value="Resolver" />
            <input type="reset" value="Limpiar" />
        </form>
    </body>
</html>
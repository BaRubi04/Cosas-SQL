<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" author="Rubí">
    <title>Agradecer</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <header>
        <h1>AGRADECE EN COMPAÑÍA</h1>
    </header>
    <nav>
        <a href="#">Agradecer</a>
        <a href="#">Recibir</a>
        <a href="#">Cerrar Sesión</a>
    </nav>
    <div>
        <div class="tarjeta">
            <form action="okformulario.php" method="POST">
                <div class="grupo-formulario">
                    <label>para</label>
                    <div class="contenedor-entrada">
                        <select>
                            <!-- <interrogacion php
                <option value="'valor_campo'" name="'nombre_campo'">.nombre_jesuita.</option>;
                             interrogacion>      -->  

            <!-- En value va el valor del campo, en name el nombre del campo y lo que se visualiza en navegador es el jesuita correspondiente  -->
                        </select>
                    </div>
                </div>

                <div class="grupo-formulario">
                    <label>quiero agradecerte</label>
                    <div class="contenedor-entrada">
                        <input placeholder="Escribe aquí tu agradecimiento..."></input>
                    </div>
                </div>

                <button type="submit" class="boton">ENVIAR</button>
            </form>
        </div>
    </div>
</body>
</html>
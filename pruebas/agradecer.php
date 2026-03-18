<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" author="Rubí">
    <title>Agradece en Compañía</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

    <div class="envoltorio-principal">
        <div class="encabezado">
            <h1>AGRADECE EN COMPAÑÍA</h1>
        </div>
        <nav>
            <a href="#" class="activo">Agradecer</a>
            <a href="#">Recibir</a>
            <a href="#">Cerrar Sesión</a>
        </nav>
        <div class="tarjeta-login">
            <form>
                <div class="grupo-formulario">
                    <label>para</label>
                    <div class="contenedor-entrada">
                        <select>
                            <?php 
                                <option value="'valor_campo'" name="'nombre_campo'">.nombre_jesuita.</option>;
                            ?>        
            <!-- En value va el valor del campo, en name el nombre del campo y lo que se visualiza en navegador es el jesuita correspondiente  -->
                        </select>
                    </div>
                </div>

                <div class="grupo-formulario">
                    <label>quiero agradecerte</label>
                    <div class="contenedor-entrada">
                        <input placeholder="Escribe aquí tu mensaje de agradecimiento..."></input>
                    </div>
                </div>

                <button type="submit" class="boton-enviar">ENVIAR</button>
            </form>
        </div>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="es-ES">

</html>

<head>
    <meta charset="UTF-8">
    <title>Arrepentimiento</title>
</head>

<body>
    <h1>Arrepentimiento de Compra</h1>
    <form action="#" method="POST">
        <legend>Complete el formulario para proceder con el arrepentimiento</legend><br>

        <div >
            <div>
                <label>Nombre</label>

                <input type="text" name="nombre" placeholder="Nombre" required>
            </div>
            <div>
                <label>DNI</label>
                
                <input type="number" name="documento" placeholder="DNI" required>
            </div>
            <div>
                <label>Teléfono</label>

                <input type="tel" name="telefono" placeholder="Teléfono" required>
            </div>
            <div>
                <label>Correo</label>

                <input type="mail" name="correo" placeholder="Mail" required>
            </div>
            <div>
                <label>Numero de orden:</label>
                
                <input type="number" name="numOrden" placeholder="Num. orden" required>
            </div>
            <div>
                <label>Motivo cancelacion:</label>

                <textarea></textarea>
            </div>
        </div>

        <div >
            <input type="submit" value="Enviar">
        </div>
    </form>
</body>

</html>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea docker de Smill</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            text-align: center;
            gap: 50px;
            padding: 50px;
        }

        .container {
            width: 50%;
            height: 50%;
            background-color: gray;
            border-radius: 1%;
            display: flex;
            align-items: center;
            flex-direction: column;
        }

        .variables{
            width: 50%;
            height: 50%;
            background-color: green;
            border-radius: 1%;
            display: flex;
            align-items: center;
            flex-direction: column;
        }

    </style>
</head>

<body>
    <div class="container">
        <h1>Tarea docker de Smill</h1>
        <p>Matrícula: 2022-0134</p>
        <p>Nombre: Smill Emmanuel Rivera Diaz</p>
        <p>Materia: Devops</p>
        <p>Tarea: Practica Docker Compose</p>
    </div>

    <div class="variables">
        <h1>Variables de Entorno</h1>
        <p>MySQL User: <?php echo getenv('MYSQL_USER'); ?></p>
        <p>MySQL Password: <?php echo getenv('MYSQL_PASSWORD'); ?></p>
        <p>MySQL Database: <?php echo getenv('MYSQL_DATABASE'); ?></p>
    </div>
</body>

</html>
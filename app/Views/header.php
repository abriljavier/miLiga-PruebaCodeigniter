<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog de Jugadores de Fútbol</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em 0;
            width: 100%;
        }

        section {
            max-width: 800px;
            margin: 20px auto;
            width: 100%;
        }

        .player-card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin: 20px;
            overflow: hidden;
            position: relative;
            flex: 0 0 calc(33.33% - 40px);
            /* Ajustar según el diseño deseado */
            box-sizing: border-box;
        }

        .player-image {
            width: 100px;
            height: 100px;
            object-fit: cover;
        }

        .player-details {
            padding: 20px;
        }

        .player-name {
            font-size: 1.5em;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .league-info {
            display: flex;
            align-items: center;
        }

        .league-image {
            width: 30px;
            height: 30px;
            object-fit: cover;
            border-radius: 50%;
            margin-right: 10px;
        }

        .action-buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }

        .action-buttons button {
            flex: 1;
            margin-right: 5px;
        }

        .menu {
            width: 250px;
            background-color: #333;
            padding: 20px;
            color: #fff;
            text-align: center;
            box-sizing: border-box;
        }

        .menu label {
            display: block;
            margin-bottom: 10px;
            color: #fff;
            text-align: left;
        }

        .menu input,
        .menu select,
        .menu button {
            width: 100%;
            margin-bottom: 10px;
            padding: 10px;
            box-sizing: border-box;
        }

        .menu button {
            background-color: #555;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <header>
        <h1>Blog de Jugadores de Fútbol</h1>
    </header>
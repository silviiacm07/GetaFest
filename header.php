<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GetaFest</title>

    <style>
        :root {
            --bg-color: #0f172a;
            --card-bg: #1e293b;
            --text-color: #f8fafc;
            --accent-color: #6366f1;
            --border-radius: 12px;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--bg-color);
            color: var(--text-color);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            padding: 20px;
            box-sizing: border-box;
        }

        .container {
            display: flex;
            gap: 30px;
            max-width: 900px;
            width: 100%;
            flex-wrap: wrap;
            justify-content: center;
        }

        /* Estilo de la tarjeta */
        .profile-card {
            background-color: var(--card-bg);
            padding: 30px;
            border-radius: var(--border-radius);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
            flex: 1;
            min-width: 300px;
        }

        h1, h2, h3 {
            margin-top: 0;
            color: var(--text-color);
            text-align: center;
        }

        hr {
            border: 0;
            height: 1px;
            background: #334155;
            margin: 20px 0;
        }

        /* Estilos para campos */
        label {
            display: block;
            margin-top: 15px;
            margin-bottom: 8px;
            font-weight: 600;
            font-size: 0.9rem;
        }

        input[type="text"],
        input[type="email"],
        input[type="number"],
        select,
        textarea {
            width: 100%;
            padding: 10px;
            border-radius: 6px;
            border: 1px solid #334155;
            background-color: var(--bg-color);
            color: white;
            box-sizing: border-box;
        }

        textarea {
            resize: vertical;
            height: 80px;
        }

        input[type="file"] {
            margin-top: 5px;
            color: #f8fafc;
            width: 100%;
        }

        /* Checkboxes */
        input[type="radio"],
        input[type="checkbox"] {
            margin-right: 8px;
            accent-color: var(--accent-color);
        }

        /* Botón */
        button[type="submit"],
        .btn {
            width: 100%;
            background-color: var(--accent-color);
            color: white;
            border: none;
            padding: 12px;
            border-radius: 6px;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s ease;
            margin-top: 20px;
            font-size: 1rem;
            text-align: center;
            text-decoration: none;
            display: block;
            box-sizing: border-box;
        }

        button[type="submit"]:hover,
        .btn:hover {
            filter: brightness(1.2);
        }

        /* Tarjeta final */
        .profile-card {
            animation: fadeIn 0.5s ease-in-out;
        }

        /* Imagen */
        .profile-img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: none;
            display: block;
            margin: 15px auto;
        }

        .badge {
            display: inline-block;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: bold;
            margin-bottom: 15px;
            text-transform: uppercase;
            background-color: var(--accent-color);
            color: white;
        }

        ul {
            list-style: none;
            padding-left: 0;
            text-align: left;
        }

        li {
            background: #334155;
            margin-bottom: 8px;
            padding: 8px 12px;
            border-radius: 6px;
        }

        /* Días en horizontal */
        .dias-container {
            display: flex;
            gap: 20px;
            margin-bottom: 20px;
        }

        .dia-item {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .dia-item label {
            margin: 0;
        }

        .radio-label {
            display: inline;
            font-weight: normal;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        input[type="file"] {
            margin-top: 5px;
            color: #f8fafc;
            width: 100%;
        }

        input[type="file"]::file-selector-button {
            background-color: white;
            color: #0f172a;
            border: none;
            border-radius: 20px;
            padding: 8px 16px;
            font-weight: 600;
            cursor: pointer;
            margin-right: 10px;
        }

        input[type="file"]::file-selector-button:hover {
            background-color: #e2e8f0;
        }
    </style>
</head>

<body>

<div class="container">

    <div class="profile-card">
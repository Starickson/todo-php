    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../public/css/style.css">
    <script async src="public/js/index.js"></script>

    <style>
        /* theme */
        :root {
            --font-family: 'Open Sans', sans-serif;
            --primary: #8e44ad;
            --dark: #2c3e50;
            --background-light: #ecf0f1;
            --text-color: #444;
            --text-color-light: #fff;
            --box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px,
                rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
            --border: 1px solid #eee;
        }

        * {
            box-sizing: border-box;
        }

        html,
        body {
            margin: 0;
            padding: 0;
            font-size: 10px;
            font-family: var(--font-family);
            background-color: var(--background-light);
        }

        h1,
        p {
            margin: 0;
        }

        h1 {
            margin-bottom: 1rem;
        }

        .container {
            font-size: 1.6rem;
            min-height: 100vh;
            display: flex;
            flex-flow: column;
            color: var(--text-color);
        }

        /* button */

        .btn {
            background-color: white;
            font-weight: 700;
            color: var(--text-color);
            font-size: 1.6rem;
            border: 0;
            padding: 10px 15px;
            cursor: pointer;
            border-radius: 3px;
            margin: 0 5px;
            box-shadow: var(--box-shadow);
        }

        .btn-primary {
            background-color: var(--primary);
            color: var(--text-color-light);
        }

        /* header */

        header {
            background-color: var(--primary);
            padding: 1.5rem;
            box-shadow: var(--box-shadow);
        }

        .logo {
            font-weight: 700;
            font-size: 2rem;
            color: var(--text-color-light);
        }

        /* content */

        .content {
            flex: 1;
            display: flex;
            flex-flow: row;
            justify-content: center;
            align-items: center;
        }

        /* footer */

        footer {
            display: flex;
            background: var(--dark);
            flex-flow: row-reverse;
            color: var(--text-color-light);
            padding: 1.5rem;
        }

        .text-danger {
            color: red
        }

        .low-opacity {
            opacity: 0.5;
        }

        .todo-container {
            padding: 1.5rem;
            background-color: white;
            border: var(--border);
            border-radius: 3px;
            min-width: 60rem;
            min-height: 40rem;
            box-shadow: var(--box-shadow);
        }

        .todo-container h1 {
            text-align: center;
        }

        .todo-form {
            display: flex;
            flex-flow: row nowrap;
            align-items: center;
        }

        .todo-form input {
            flex: 1;
            margin-right: 0.5rem;
            border: var(--border);
            border-radius: 3px;
            padding: 10px 15px;
        }
    </style>
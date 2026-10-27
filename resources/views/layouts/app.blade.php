<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Praktikum Laravel')</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background: #f4f6f9;
            color: #333;
        }

        nav {
            color: white;
            text-decoration: none;
            margin-right: 22px;
            font-weight: bold;
        }

        main {
            max-width: 1000px;
            margin: 30px auto;
            padding: 25px;
            background: white;
            border-radius: 8px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background: #e8efff;
        }
        
        .btn {
            display: inline-block;
            padding: 7px 12 px;
            background: #2563eb;
            color: white;
            text-decoration: none;
            border-radius: 4px;
        }

    </style>
</head>
<body>

    @include('partials.navbar')

    <main>
        @yield('content')
    </main>

</body>
</html>
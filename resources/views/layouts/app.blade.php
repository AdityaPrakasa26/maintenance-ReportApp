<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maintenance Report App</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            display: flex;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .sidebar {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            z-index: 100;
            width: 250px;
            background-color: #007bff; /* Warna biru */
            color: white;
            box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
            transition: transform 0.3s ease-in-out;
        }

        .sidebar.hidden {
            transform: translateX(-100%);
        }

        @media (max-width: 767.98px) {
            .sidebar {
                top: 0;
            }
        }

        .sidebar-sticky {
            height: calc(100vh);
            overflow-x: hidden;
            overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
        }

        .sidebar .nav-link {
            font-weight: 500;
            color: white;
            display: block;
            padding: 10px 20px;
            text-decoration: none;
            background: none;
        }

        .sidebar .nav-link .feather {
            margin-right: 4px;
            color: #727272;
        }

        .sidebar .nav-link.active,
        .sidebar .nav-link:focus,
        .sidebar .nav-link:hover {
            color: black;
            background: none;
        }

        .sidebar-heading {
            font-size: 1.25rem;
            margin-bottom: 1rem;
            padding: 0 20px;
            border-bottom: 1px solid #e9ecef; /* Garis pemisah */
        }

        .navbar-toggler {
            position: fixed;
            top: 10px;
            left: 10px;
            border: none;
            background: none;
            font-size: 1.25rem;
            color: white;
            z-index: 101; /* Above the sidebar */
        }

        .content {
            flex: 1;
            padding: 20px;
            margin-left: 250px; /* Menyesuaikan dengan lebar sidebar */
            transition: margin-left 0.3s ease-in-out;
        }

        .content.collapsed {
            margin-left: 0;
        }
    </style>
</head>
<body>
    <button class="navbar-toggler" id="sidebarToggle"><i class="fas fa-bars"></i></button>
    <div class="sidebar" id="sidebar">
        <h2 style="text-align: center">Maintenance Report</h2>
        <ul class="sidebar-sticky">
            <li><a class="nav-link" href="/">Home</a></li>
            <li><a class="nav-link" href="/change-request">Change Request Form</a></li>
            <li><a class="nav-link" href="/task-description">Task Description</a></li>
            <li><a class="nav-link" href="/task-list">Task List</a></li>
        </ul>
    </div>
    <div class="content" id="content">
        @yield('content')
    </div>
    <script>
        document.getElementById('sidebarToggle').addEventListener('click', function () {
            document.getElementById('sidebar').classList.toggle('hidden');
            document.getElementById('content').classList.toggle('collapsed');
        });
    </script>
</body>
</html>

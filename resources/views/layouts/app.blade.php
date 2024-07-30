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
            background-color: rgba(0, 123, 255, 0.6);
            /* Warna biru dengan transparansi 60% */
            color: white;
            box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
            transition: transform 0.3s ease-in-out;
            display: flex;
            flex-direction: column;
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
            flex: 1;
            overflow-x: hidden;
            overflow-y: auto;
            /* Scrollable contents if viewport is shorter than content. */
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
            border-bottom: 1px solid #e9ecef;
            /* Garis pemisah */
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .navbar-toggler {
            position: absolute;
            top: 10px;
            left: 10px;
            border: none;
            background: none;
            font-size: 1.25rem;
            color: white;
            z-index: 101;
            /* Above the sidebar */
        }

        .navbar-toggler.sidebar-hidden {
            color: #007bff;
            /* Warna biru ketika sidebar tersembunyi */
        }

        .sidebar-heading h2 {
            margin: 0;
            font-size: 1.25px;
        }

        .content {
            flex: 1;
            padding: 20px;
            margin-left: 250px;
            /* Menyesuaikan dengan lebar sidebar */
            transition: margin-left 0.3s ease-in-out;
        }

        .content.collapsed {
            margin-left: 0;
        }

        /* Logout Button Styles */
        .logout-button {
            padding: 10px 20px;
            background-color: rgba(255, 255, 255, 0.6);
            /* Putih dengan transparansi 60% */
            color: #007bff;
            /* Warna teks logout */
            text-align: center;
            text-decoration: none;
            border: none;
            border-radius: 4px;
            margin: 10px;
            /* Spacing from sides and bottom */
            width: calc(100% - 20px);
            /* Mengisi lebar sidebar dengan margin */
            cursor: pointer;
            box-sizing: border-box;
            /* Untuk memastikan padding tidak membuat elemen melebar */
        }

        .logout-button:hover {
            background-color: rgba(255, 255, 255, 0.8);
            /* Putih dengan transparansi 80% pada hover */
        }
    </style>
</head>

<body>
    <button class="navbar-toggler" id="sidebarToggle"><i class="fas fa-bars"></i></button>
    <div class="sidebar" id="sidebar">
        <div>
            <button class="navbar-toggler" id="sidebarToggle"><i class="fas fa-bars"></i></button>
            <h2><a class="nav-link" href="/">Maintenance Report</a></h2>
        </div>
        <ul class="sidebar-sticky">
            <li><a class="nav-link" href="/change-request">Change Request Form</a></li>
            <li><a class="nav-link" href="/task-description">Task Description</a></li>
            <li><a class="nav-link" href="/task-list">Task List</a></li>
            <li><a class="nav-link" href="#" id="libraryToggle">Library</a></li>
            <ul class="sidebar-submenu" id="libraryMenu">
                <li><a class="nav-link" href="/library">View Documents</a></li>
                <li><a class="nav-link" href="/library">Upload Documents</a></li>
            </ul>
        </ul>
        <a href="/logout" class="logout-button">Logout</a>
    </div>
    <div class="content" id="content">
        @yield('content')
    </div>
    <script>
        const sidebar = document.getElementById('sidebar');
        const sidebarToggle = document.getElementById('sidebarToggle');
        const content = document.getElementById('content');

        sidebarToggle.addEventListener('click', function() {
            sidebar.classList.toggle('hidden');
            content.classList.toggle('collapsed');
            // Tambahkan atau hapus kelas 'sidebar-hidden' pada tombol toggle
            if (sidebar.classList.contains('hidden')) {
                sidebarToggle.classList.add('sidebar-hidden');
            } else {
                sidebarToggle.classList.remove('sidebar-hidden');
            }
        });

        const libraryToggle = document.getElementById('libraryToggle');
        const libraryMenu = document.getElementById('libraryMenu');

        libraryToggle.addEventListener('click', function() {
            libraryMenu.classList.toggle('show');
        });
    </script>
</body>

</html>

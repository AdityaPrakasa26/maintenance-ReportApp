<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maintenance Report</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <button class="navbar-toggler" id="sidebarToggle"><i class="fas fa-bars"></i></button>
    <div class="sidebar" id="sidebar">
        <div class="header-container">
            <button class="navbar-toggler" id="sidebarToggle"><i class="fas fa-bars"></i></button>
            <a href="{{ url('/home') }}">
                <img src="{{ asset('img/imats1.png') }}" alt="Logo">
            </a>
        </div>
        <ul class="sidebar-sticky">
            <li><a class="nav-link" href="{{ route('maintenance.createChangeRequest') }}">Change Request Form</a></li>
            <li><a class="nav-link" href="{{ route('maintenance.createTaskDescription') }}">Task Description</a></li>
            <li><a class="nav-link" href="{{ route('maintenance.createTaskList') }}">Task List</a></li>
            <li>
                <a class="nav-link" href="#" id="libraryToggle">Library</a>
                <ul class="sidebar-submenu" id="libraryMenu">
                    <li><a class="nav-link" href="/library">View Documents</a></li>
                    <li><a class="nav-link" href="/upload">Upload Documents</a></li>
                </ul>
            </li>
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

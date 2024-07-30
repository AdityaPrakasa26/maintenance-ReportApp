@extends('layouts.app')

@section('content')
    <h1>Library</h1>

    <!-- Search and Filter -->
    <div class="search-filter">
        <input type="text" id="searchInput" placeholder="Search...">
        <select id="filterSelect">
            <option value="">Filter by Date</option>
            <option value="recent">Recent</option>
            <!-- Add more filters as needed -->
        </select>
    </div>

    <!-- Notification Area -->
    <div class="notifications">
        <h2>Recent Notifications</h2>
        <!-- Notifications will be listed here -->
    </div>

    <!-- Document Table -->
    <table class="document-table">
        <thead>
            <tr>
                <th colspan="3">Change Description</th>
            </tr>
            <tr>
                <th>Project Name:</th>
                <th>Change Name:</th>
                <th>Ticket Number:</th>
            </tr>
            <tr>
                <th>Request By:</th>
                <th>Contact:</th>
                <th>Date:</th>
            </tr>
            <tr>
                <th colspan="3">Description:</th>
            </tr>
            <tr>
                <th colspan="3">Reason:</th>
            </tr>
            <tr>
                <th colspan="3">Priority:</th>
            </tr>
            <tr>
                <th colspan="3">Technician:</th>
            </tr>
            <tr>
                <th colspan="3">List Task:</th>
            </tr>
            <tr>
                <th colspan="3">Estimated Time of Work:</th>
            </tr>
            <tr>
                <th colspan="3">Duration:</th>
            </tr>
            <tr>
                <th colspan="3">Cost:</th>
            </tr>
            <tr>
                <th>Date Needed:</th>
                <th>Approval of Requester:</th>
                <th>Approval of Project Manager:</th>
            </tr>
            <tr>
                <th></th>
                <th>Approval Date:</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <!-- Dynamic rows will be inserted here -->
        </tbody>
    </table>
@endsection

@push('scripts')
    <script>
        document.getElementById('searchInput').addEventListener('input', function() {
            // Add search functionality here
        });

        document.getElementById('filterSelect').addEventListener('change', function() {
            // Add filter functionality here
        });
    </script>
@endpush

<!DOCTYPE html>
<html>

<head>
    <title>Change Request Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .header {
            text-align: center;
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .section {
            margin-bottom: 10px;
        }

        .label {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="header">Change Request Form</div>

    <div class="section">
        <div class="label">Project Name:</div>
        <div>{{ $project_name }}</div>
    </div>

    <div class="section">
        <div class="label">Change Name:</div>
        <div>{{ $change_name }}</div>
    </div>

    <div class="section">
        <div class="label">Ticket Number:</div>
        <div>{{ $ticket_number }}</div>
    </div>

    <div class="section">
        <div class="label">Requested By:</div>
        <div>{{ $requested_by }}</div>
    </div>

    <div class="section">
        <div class="label">Contact:</div>
        <div>{{ $contact }}</div>
    </div>

    <div class="section">
        <div class="label">Date:</div>
        <div>{{ $date }}</div>
    </div>

    <div class="section">
        <div class="label">Description:</div>
        <div>{{ $description }}</div>
    </div>

    <div class="section">
        <div class="label">Priority:</div>
        <div>{{ $priority }}</div>
    </div>

    <div class="section">
        <div class="label">Technician:</div>
        <div>{{ $technician }}</div>
    </div>

    <div class="section">
        <div class="label">Estimated Time of Work:</div>
        <div>{{ $time_of_work }}</div>
    </div>

    <div class="section">
        <div class="label">Duration:</div>
        <div>{{ $duration }}</div>
    </div>

    <div class="section">
        <div class="label">Cost:</div>
        <div>{{ $cost }}</div>
    </div>

    <div class="section">
        <div class="label">Date Needed:</div>
        <div>{{ $date_needed }}</div>
    </div>

    <div class="section">
        <div class="label">Approval of Requester:</div>
    </div>

    <div class="section">
        <div class="label">Approval Date:</div>
        <div>{{ $approval_date }}</div>
    </div>
</body>

</html>

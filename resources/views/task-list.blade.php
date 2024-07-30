@extends('layouts.app')

@section('content')
    <h1>Task List</h1>
    <form action="/submit-task-list" method="POST">
        @csrf
        <label for="estimated_time">Estimated Time of Work:</label><br>
        <input type="text" id="estimated_time" name="estimated_time"><br><br>

        <label for="duration">Duration:</label><br>
        <select id="duration" name="duration">
            <option value="1 hour">1 hour</option>
            <option value="2 hours">2 hours</option>
            <option value="Half Day">Half Day</option>
            <option value="Full Day">Full Day</option>
        </select><br><br>

        <label for="cost">Cost:</label><br>
        <input type="text" id="cost" name="cost"><br><br>

        <label for="date_needed">Date Needed:</label><br>
        <input type="date" id="date_needed" name="date_needed"><br><br>

        <label for="approval_requester">Approval of Requester:</label><br>
        <input type="text" id="approval_requester" name="approval_requester"><br><br>

        <label for="approval_manager">Approval of Project Manager:</label><br>
        <input type="text" id="approval_manager" name="approval_manager"><br><br>

        <label for="approval_date">Approval Date:</label><br>
        <input type="date" id="approval_date" name="approval_date"><br><br>

        <button type="submit">Submit</button>
    </form>
@endsection

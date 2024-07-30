@extends('layouts.app')

@section('content')
    <h1>Task Description</h1>
    <form action="/submit-task-description" method="POST">
        @csrf
        <label for="description">Description:</label><br>
        <textarea id="description" name="description"></textarea><br><br>

        <label for="location">Location:</label><br>
        <input type="text" id="location" name="location"><br><br>

        <label for="reason">Reason:</label><br>
        <input type="text" id="reason" name="reason"><br><br>

        <label for="priority">Priority Status:</label><br>
        <select id="priority" name="priority">
            <option value="High">High</option>
            <option value="Medium">Medium</option>
            <option value="Low">Low</option>
        </select><br><br>

        <label for="technician">Technician:</label><br>
        <input type="text" id="technician" name="technician"><br><br>

        <button type="submit">Submit</button>
    </form>
@endsection

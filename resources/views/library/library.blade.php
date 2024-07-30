@extends('layouts.app')

@section('content')
<div class="container">
    <h1>View Documents</h1>
    <form action="/library" method="GET">
        <input type="text" name="search" placeholder="Search documents">
        <button type="submit">Search</button>
    </form>

    <div class="document-list">
        @foreach($documents as $document)
        <div class="document-item">
            <div class="document-info">
                <p>{{ $document->name }}</p>
                <button onclick="showDocumentInfo({{ $document->id }})">i</button>
            </div>
        </div>
        @endforeach
    </div>
</div>

<div id="document-info-popup" style="display: none;">
    <div class="popup-content">
        <h2>File Information</h2>
        <p id="file-info"></p>
        <button onclick="closePopup()">Close</button>
    </div>
</div>

<script>
    function showDocumentInfo(id) {
        fetch(`/library/document/${id}`)
            .then(response => response.json())
            .then(data => {
                document.getElementById('file-info').innerHTML = `
                    <strong>Who has Access:</strong> ${data.access}<br>
                    <strong>Type File:</strong> ${data.type}<br>
                    <strong>Size:</strong> ${data.size}<br>
                    <strong>Owner:</strong> ${data.owner}<br>
                    <strong>Modified:</strong> ${data.modified}<br>
                    <strong>Created:</strong> ${data.created}<br>
                    <strong>Download Permissions:</strong> ${data.download_permissions}
                `;
                document.getElementById('document-info-popup').style.display = 'block';
            });
    }

    function closePopup() {
        document.getElementById('document-info-popup').style.display = 'none';
    }
</script>
@endsection

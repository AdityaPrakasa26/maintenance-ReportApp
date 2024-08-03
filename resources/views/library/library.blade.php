@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Daftar Pemeliharaan</h1>
        <table id="maintenanceTable" class="table table-bordered yajra-datatable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Proyek</th>
                    <th>Nama Perubahan</th>
                    <th>Nomor Tiket</th>
                    <th>Diminta Oleh</th>
                    <th>Kontak</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
@endsection

@section('script')
    <script>
        $(function() {
            var table = $('.yajra-datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('maintenance.index') }}",
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'project_name',
                        name: 'project_name'
                    },
                    {
                        data: 'change_name',
                        name: 'change_name'
                    },
                    {
                        data: 'ticket_number',
                        name: 'ticket_number'
                    },
                    {
                        data: 'requested_by',
                        name: 'requested_by'
                    },
                    {
                        data: 'contact',
                        name: 'contact'
                    },
                    {
                        data: 'date',
                        name: 'date'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false,
                    },
                ]
            });
        });
    </script>
@endsection

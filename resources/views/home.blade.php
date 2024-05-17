<x-layout>
    <x-slot:subtitle>{{ $subtitle }}</x-slot:subtitle>
    <x-slot:title>{{ $title }}</x-slot:title>
    <!-- Recent Sales Start -->
    <div class="container-fluid px-4 pt-4">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title mb-4">All Surveys</h6>
                        <div class="table-responsive mt-2">
                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>User Id</th>
                                        <th>Tanggal</th>
                                        <th>Waktu</th>
                                        <th>Total IKP</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @foreach ($surveys as $type)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $type->code_user }}</td>
                                    <td>{{ $type->date }}</td>
                                    <td>{{ $type->time }}</td>
                                    <td>{{ $type->total_IKP }}</td>
                                    <td>
                                        <a
                                            href="#"
                                            class="btn btn-danger"
                                            id="delete"
                                            >Delete</a
                                        >
                                    </td>
                                </tr>
                                @endforeach --}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Recent Sales End -->
</x-layout>

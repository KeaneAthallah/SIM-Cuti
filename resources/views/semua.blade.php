<x-layout>
    <x-slot:subtitle>{{ $subtitle }}</x-slot:subtitle>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:user>{{ $user->name }}</x-slot:user>
    {{-- <x-slot:user>{{ $user }}</x-slot:user> --}}
    <div class="container-fluid px-4 pt-4">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title mb-4">Semua users</h6>
                        <div class="table-responsive mt-2">
                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr class="text-xs lg:text-md">
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>NIP</th>
                                        <th>Pangkat</th>
                                        <th>Gol</th>
                                        <th>Jabatan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->nip }}</td>
                                            <td>{{ $user->pangkat }}</td>
                                            <td>{{ $user->gol }}</td>
                                            <td>{{ $user->jabatan }}</td>
                                            <td>
                                                <a href="#" class="btn btn-danger" id="delete">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>

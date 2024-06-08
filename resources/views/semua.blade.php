<x-layout>
    <x-slot:subtitle>{{ $subtitle }}</x-slot:subtitle>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="container-fluid px-4 pt-4">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title mb-4">Semua users</h6>
                        <div class="table-responsive mt-2">
                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr class="text-xs lg:text-base text-center">
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
                                            <td class="flex flex-row gap-1">
                                                <form action="{{ route('users.delete', $user->id) }}" method="POST">
                                                    @csrf
                                                    @method('Delete')
                                                    <button class="btn btn-danger" id="delete"
                                                        onclick="confirm ('Apakah anda yakin ingin menghapus user ini?')">Delete</button>
                                                </form>
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

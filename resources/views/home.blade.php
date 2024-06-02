<x-layout>
    <x-slot:subtitle>{{ $subtitle }}</x-slot:subtitle>
    <x-slot:title>{{ $title }}</x-slot:title>
    <!-- Recent Sales Start -->
    <div class="container-fluid px-4 pt-4">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title mb-4">Semua Pengajuan Cuti</h6>
                        <div class="table-responsive mt-2">
                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr class="text-xs lg:text-base">
                                        <th>No</th>
                                        <th>NIP</th>
                                        <th>Jenis</th>
                                        <th>Mulai</th>
                                        <th>Akhir</th>
                                        <th>Total</th>
                                        <th>Pesan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cuti as $c)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $c->user->nip }}</td>
                                            <td>{{ 'Cuti ' . $c->tipe }}</td>
                                            <td>{{ $c->tanggal_mulai }}</td>
                                            <td>{{ $c->tanggal_akhir }}</td>
                                            <td>{{ $c->total_cuti . ' Hari' }}</td>
                                            <td>{{ $c->pesan }}</td>
                                            <td class="flex flex-row gap-1">
                                                <form action="{{ route('cuti.update', $c->id) }}"></form>
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
    <!-- Recent Sales End -->
</x-layout>

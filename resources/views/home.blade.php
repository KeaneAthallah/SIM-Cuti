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
                                        <th>File Pendukung</th>
                                        <th>Total</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cuti as $c)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $c->user->nip }}</td>
                                            <td>{{ 'Cuti ' . $c->tipe }}</td>
                                            <td><a href="{{ '/storage/' . $c->filePendukung }}">Lihat disini</a></td>
                                            <td>{{ $c->total_cuti . ' Hari' }}</td>
                                            <td>{{ $c->status }}</td>
                                            <td class="flex flex-row gap-1">
                                                @if ($c->status != 'Diterima')
                                                    <form action="{{ route('cuti.update', $c->id) }}" method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <input type="hidden" name="status"
                                                            value="Ditolak oleh {{ auth()->user()->name }}">
                                                        <input type="hidden" name="tertuju" value="sampah">
                                                        <button class="btn btn-danger"
                                                            onclick="return confirm('apakah anda yakin?')"
                                                            id="info">Ditolak</button>
                                                    </form>
                                                    <form action="{{ route('cuti.update', $c->id) }}" method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <input type="hidden" name="status"
                                                            value="Diterima oleh {{ auth()->user()->name }}">
                                                        <input type="hidden" name="tertuju" value="admin">
                                                        <button class="btn btn-success"
                                                            onclick="return confirm('apakah anda yakin?')"
                                                            id="info">Diterima</button>
                                                    </form>
                                                @endif
                                                <a href="{{ route('cuti.show', $c->id) }}" class="btn btn-info"
                                                    id="delete">Info</a>
                                                @if (auth()->user()->role == 'sekdis')
                                                    <a href="{{ route('sekdis1', $c->id) }}" class="btn btn-warning"
                                                        id="delete">Catatan</a>
                                                @endif
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

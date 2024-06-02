<x-layout>
    <x-slot:subtitle>{{ $subtitle }}</x-slot:subtitle>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="flex flex-col gap-5">
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
                                            <th>Status</th>
                                            <th>Pesan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($cuti as $c)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $c->user->nip }}</td>
                                                <td>{{ $c->tipe }}</td>
                                                <td>{{ $c->tanggal_mulai }}</td>
                                                <td>{{ $c->tanggal_akhir }}</td>
                                                <td>{{ $c->total_cuti . ' Hari' }}</td>
                                                <td>{{ $c->status }}</td>
                                                <td>{{ $c->pesan }}</td>
                                                <td class="flex flex-row gap-1">
                                                    <form action="{{ route('cuti.destroy', $c->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger"
                                                            onclick="return confirm('Apakah anda yakin ingin menghapusnya?')"
                                                            id="delete">Delete</button>
                                                    </form>
                                                    <a href="{{ route('cuti.show', $c->id) }}" class="btn btn-info"
                                                        id="delete">Info</a>
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
        <form class="px-4 py-4 bg-slate-200 mx-6 rounded-md" action="{{ route('cuti.store') }}" method="POST">
            @csrf
            <input type="hidden" name="hak" value="{{ auth()->user()->hak }}" id="hak">
            <h2 class="text-base font-bold leading-7 text-gray-900">Ajukan Cuti</h2>
            <p class="mt-1 text-sm leading-6 text-gray-700">Silahkan isi form dibawah untuk melakukan pengajuan
                cuti.</p>
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-3">
                    <label id="jenis" for="jenis" class="block text-sm font-medium leading-6 text-gray-900">Jenis
                        Cuti</label>
                    <div class="mt-2">
                        <select id="jenis-cuti" name="tipe" autocomplete="jenis-name"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <option value="tahunan">Cuti Tahunan</option>
                            @if ($yearPassed >= 5)
                                <option value="besar">Cuti Besar</option>
                            @endif
                            <option value="sakit">Cuti Sakit</option>
                            @if (substr(auth()->user()->nip, 16, 1) == 2)
                                <option value="melahirkan">Cuti Melahirkan</option>
                            @endif
                            <option value="alasanPenting">Cuti Karena alasan penting</option>
                            <option value="luarTanggunganNegara">Cuti Di luar tanggungan negara</option>
                        </select>
                        @error('tipe')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="sm:col-span-3">
                    <label id="tertuju" for="tertuju"
                        class="block text-sm font-medium leading-6 text-gray-900">Tertuju</label>
                    <div class="mt-2">
                        <select id="tertuju-cuti" name="tertuju" autocomplete="tertuju-name"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            @foreach ($tertuju as $t)
                                <option value="{{ $t->role }}">{{ $t->jabatan }}</option>
                            @endforeach
                        </select>
                        @error('tertuju')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="sm:col-span-3">
                    <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Total hari cuti
                        yang
                        dapat diambil (hari)</label>
                    <div class="mt-2">
                        <input type="number" name="total_hak" id="totalCuti" autocomplete="given-name"
                            class="pl-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            readonly>
                    </div>
                    @error('total_hak')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="sm:col-span-3">
                    <label for="tanggal_mulai" class="block text-sm font-medium leading-6 text-gray-900">Tanggal mulai
                        cuti</label>
                    <div class="mt-2">
                        <input type="date" name="tanggal_mulai" id="tanggal_mulai" autocomplete="given-name"
                            class=" pl-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                    @error('tanggal_mulai')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="sm:col-span-3">
                    <label for="tanggal_akhir" class="block text-sm font-medium leading-6 text-gray-900">Tanggal akhir
                        cuti</label>
                    <div class="mt-2">
                        <input type="date" name="tanggal_akhir" id="tanggal_akhir"
                            class="pl-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                    @error('tanggal_akhir')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="sm:col-span-6">
                    <label for="pesan" class="block text-sm font-medium leading-6 text-gray-900">Comment</label>
                    <div class="mt-2">
                        <textarea id="pesan" name="pesan" type="pesan" rows="5" cols="60"
                            class="pl-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                    </div>
                    <div class="flex flex-col">
                        @error('pesan')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        @error('total_hak')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

            </div>
            <div class="mt-4 flex justify-center p-2">
                <button class=" bg-indigo-600 hover:bg-slate-600 text-white rounded-md px-5 py-2">Submit
                </button>
            </div>
        </form>
    </div>
    <script src="{{ asset('dashboard/js/main.js') }}"></script>
</x-layout>

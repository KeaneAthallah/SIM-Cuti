<x-layout>
    <x-slot:subtitle>{{ $subtitle }}</x-slot:subtitle>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="container-fluid px-4 pt-4">
        <form action="{{ route('sekdis', $cuti->id) }}" method="POST">
            @csrf
            <div class="sm:col-span-3">
                <label for="sekdis" class="block text-sm font-medium leading-6 text-gray-900">Catatan pertimbangan
                    atasan langsung</label>
                <div class="mt-2">
                    <input type="text" name="sekdis" id="sekdis" autocomplete="sekdis"
                        class="pl-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 bg-white">
                </div>
                @error('sekdis')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <button class=" bg-indigo-600 hover:bg-slate-600 text-white rounded-md px-5 py-2 mt-2">Submit
                </button>
            </div>
        </form>
    </div>
</x-layout>

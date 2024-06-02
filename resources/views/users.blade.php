<x-layout>
    <x-slot:subtitle>{{ $subtitle }}</x-slot:subtitle>
    <x-slot:title>{{ $title }}</x-slot:title>
    <form action="{{ route('import') }}" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="sm:col-span-3">
            <label for="excel" class="block text-sm font-medium leading-6 text-gray-900">Upload Excel</label>
            <div class="mt-2">
                <input type="file" name="excel" id="excel" autocomplete="given-name"
                    class="bg-white pl-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
            @error('excel')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mt-2 flex justify-left">
            <button class=" bg-indigo-600 hover:bg-slate-600 text-white rounded-md px-5 py-2">Submit
            </button>
        </div>
    </form>
    </div>
    </x-app-layout>

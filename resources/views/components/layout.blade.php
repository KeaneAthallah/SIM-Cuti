<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    <link rel="stylesheet" href="{{ asset('dashboard/datatables.net-bs5/dataTables.bootstrap5.css') }}" />
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')
</head>

<body class="h-full">
    <div class="min-h-full bg-slate-50">
        <x-navbar>{{ $name }}</x-navbar>
        <x-header>{{ $subtitle }}</x-header>
        <main>
            <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
                {{ $slot }}
            </div>
        </main>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Plugin js for Alltype Page -->
    <script src="{{ asset('dashboard/datatables.net/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('dashboard/datatables.net-bs5/dataTables.bootstrap5.js') }}"></script>
    <!-- End plugin js Alltype Page -->
    <!-- Custom js Alltype Page -->
    <script src="{{ asset('dashboard/js/data-table.js') }}"></script>
    <!-- End custom js Alltype Page -->
</body>

</html>

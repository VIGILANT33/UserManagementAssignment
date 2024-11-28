{{--  NOTICE!!  I have used some tailwind classes with the forms to make it look a bit nicer --}}

<!DOCTYPE html>
<html lang="en">

<head>
    @vite('resources/css/app.css')

    <title>User Management</title>
</head>

<body class="bg-gray-900 text-gray-100 min-h-screen flex items-center justify-center">
    @if (session('success'))
        <div id="flash" class="flash-message flash-success flash-fade-out">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div id="flash" class="flash-message flash-error flash-fade-out">
            {{ session('error') }}
        </div>
    @endif
    <div class="w-full max-w-md p-6 bg-gray-800 rounded-lg shadow-md">
        {{ $slot }}
    </div>
</body>

</html>

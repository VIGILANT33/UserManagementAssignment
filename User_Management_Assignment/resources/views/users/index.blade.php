<x-layout>
    <h1 class="text-2xl font-bold mb-6">Login</h1>
    <form action="{{ route('login') }}" method="POST" class="space-y-4" autocomplete="off">
        @csrf
        <div>
            <label for="user_id" class="block text-sm font-medium">User ID</label>
            <input type="text" id="user_id" name="user_id"
                class="w-full mt-1 p-2 border rounded bg-gray-700 text-gray-100 focus:ring focus:ring-blue-500">
            @error('user_id')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- For Email as a Validation Credentials --}}
        {{-- <div>
            <label for="email" class="block text-sm font-medium">Email</label>
            <input type="text" id="email" name="email"
                class="w-full mt-1 p-2 border rounded bg-gray-700 text-gray-100 focus:ring focus:ring-blue-500">
            @error('email')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div> --}}
        <div>
            <label for="password" class="block text-sm font-medium">Password</label>
            <input type="password" id="password" name="password"
                class="w-full mt-1 p-2 border rounded bg-gray-700 text-gray-100 focus:ring focus:ring-blue-500">
            @error('password')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit" class="w-full p-2 bg-blue-500 rounded text-white font-semibold hover:bg-blue-600">
            Login
        </button>
    </form>
    <div class="mt-4 text-right">
        <a href="{{ route('register') }}" class="text-blue-400 hover:underline">Create Account</a>
    </div>
</x-layout>

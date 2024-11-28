<x-layout>
    <h1 class="text-2xl font-bold mb-6">Create Account</h1>

    <form action="{{ route('register') }}" method="POST" class="space-y-4" autocomplete="off">
        @csrf
        <div>
            <label for="name" class="block text-sm font-medium">Name</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}"
                class="w-full mt-1 p-2 border rounded bg-gray-700 text-gray-100 focus:ring focus:ring-blue-500">
            @error('name')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="email" class="block text-sm font-medium">Email</label>
            <input type="text" id="email" name="email" value="{{ old('email') }}"
                class="w-full mt-1 p-2 border rounded bg-gray-700 text-gray-100 focus:ring focus:ring-blue-500">
            @error('email')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="user_id" class="block text-sm font-medium">User ID</label>
            <input type="text" id="user_id" name="user_id" value="{{ old('user_id') }}"
                class="w-full mt-1 p-2 border rounded bg-gray-700 text-gray-100 focus:ring focus:ring-blue-500">
            @error('user_id')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="mobile_no" class="block text-sm font-medium">Mobile Number</label>
            <input type="text" id="mobile_no" name="mobile_no" value="{{ old('mobile_no') }}"
                class="w-full mt-1 p-2 border rounded bg-gray-700 text-gray-100 focus:ring focus:ring-blue-500">
            @error('mobile_no')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="password" class="block text-sm font-medium">Password</label>
            <input type="password" id="password" name="password"
                class="w-full mt-1 p-2 border rounded bg-gray-700 text-gray-100 focus:ring focus:ring-blue-500">
            @error('password')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="address_1" class="block text-sm font-medium">Address 1</label>
            <input type="text" id="address_1" name="address_1" value="{{ old('address_1') }}"
                class="w-full mt-1 p-2 border rounded bg-gray-700 text-gray-100 focus:ring focus:ring-blue-500">
            @error('address_1')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="address_2" class="block text-sm font-medium">Address 2</label>
            <input type="text" id="address_2" name="address_2" value="{{ old('address_2') }}"
                class="w-full mt-1 p-2 border rounded bg-gray-700 text-gray-100 focus:ring focus:ring-blue-500">
            @error('address_2')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="city" class="block text-sm font-medium">City</label>
            <input type="text" id="city" name="city" value="{{ old('city') }}"
                class="w-full mt-1 p-2 border rounded bg-gray-700 text-gray-100 focus:ring focus:ring-blue-500">
            @error('city')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="state" class="block text-sm font-medium">State</label>
            <input type="text" id="state" name="state" value="{{ old('state') }}"
                class="w-full mt-1 p-2 border rounded bg-gray-700 text-gray-100 focus:ring focus:ring-blue-500">
            @error('state')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="pincode" class="block text-sm font-medium">Pincode</label>
            <input type="text" id="pincode" name="pincode" value="{{ old('pincode') }}"
                class="w-full mt-1 p-2 border rounded bg-gray-700 text-gray-100 focus:ring focus:ring-blue-500">
            @error('pincode')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="status" class="block text-sm font-medium">Status</label>
            <select name="status" id="status"
            class="w-full mt-1 p-2 border rounded bg-gray-700 text-gray-100 focus:ring focus:ring-blue-500" >
            <option value=""selected disabled>Select Status</option>
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
            </select>
            @error('status')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
        {{-- <button class="p-2 bg-gray-600 rounded text-white font-semibold" disabled>Login </button> --}}

        <button type="submit" class="w-full p-2 bg-blue-500 rounded text-white font-semibold hover:bg-blue-600">
            Create Account
        </button>
        
        <div class="mt-4 text-right">
            <a href="{{ route('login') }}" class="text-blue-400 hover:underline">Already have an Account?</a>
        </div>
    </form>
    
</x-layout>

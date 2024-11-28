<x-layout>
    <div class="max-w-lg mx-auto bg-gray rounded-lg shadow-lg p-6">
        <h1 class="text-3xl font-bold mb-4 text-gray-900 text-center">User Profile</h1>

        <div class="border-t border-gray-300 mt-4 pt-4 space-y-4">
            <div class="flex justify-between">
                <span class="text-white font-medium">Name:</span>
                <span class="text-gray-400 font-semibold">{{ $user->name }}</span>
            </div>
            <div class="flex justify-between">
                <span class="text-white font-medium">Email:</span>
                <span class="text-gray-400 font-semibold">{{ $user->email }}</span>
            </div>
            <div class="flex justify-between">
                <span class="text-white font-medium">Mobile Number:</span>
                <span class="text-gray-400 font-semibold">{{ $user->mobile_no }}</span>
            </div>
            <div class="flex justify-between">
                <span class="text-white font-medium">Address 1:</span>
                <span class="text-gray-400 font-semibold">{{ $user->userProfile->address_1 }}</span>
            </div>
            <div class="flex justify-between">
                <span class="text-white font-medium">Address 2:</span>
                <span class="text-gray-400 font-semibold">
                    {{ $user->userProfile->address_2 ?? 'N/A' }}
                </span>
            </div>
            <div class="flex justify-between">
                <span class="text-white font-medium">City:</span>
                <span class="text-gray-400 font-semibold">{{ $user->userProfile->city }}</span>
            </div>
            <div class="flex justify-between">
                <span class="text-white font-medium">State:</span>
                <span class="text-gray-400 font-semibold">{{ $user->userProfile->state }}</span>
            </div>
            <div class="flex justify-between">
                <span class="text-white font-medium">Pincode:</span>
                <span class="text-gray-400 font-semibold">{{ $user->userProfile->pincode }}</span>
            </div>
            <div class="flex justify-between">
                <span class="text-white font-medium">Status:</span>
                <span class="text-gray-400 font-semibold">
                    @if($user->status)
                        Active
                    @else
                        Inactive
                    @endif</span>
            </div>
        </div>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit"
                class=" mt-6 w-full p-2 bg-red-500 rounded text-white font-semibold hover:bg-red-600">
                Logout
            </button>
        </form>
    </div>
</x-layout>

<div>

   <div class="mx-auto py-2">
       @foreach ($errors->all() as $error)
           <li class="text-red-500">{{ $error }}</li>
       @endforeach
   </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div class="mb-5">
            <label class="font-bold mb-1 text-gray-700 block">First name</label>
            <input type="text"
                   wire:model="firstName"
                   class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                   placeholder="Enter your firstname...">
        </div>

        <div class="mb-5">
            <label class="font-bold mb-1 text-gray-700 block">Last name</label>
            <input type="text"
                   wire:model="lastName"
                   class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                   placeholder="Enter your firstname...">
        </div>
    </div>

    <div class="mb-5">
        <label for="email" class="font-bold mb-1 text-gray-700 block">Address</label>
        <input type="text"
               wire:model="address"
               class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
               placeholder="Enter your address...">
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div class="mb-5">
            <label class="font-bold mb-1 text-gray-700 block">Country</label>
            <input type="text"
                   wire:model="country"
                   class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                   placeholder="Enter your country...">
        </div>

        <div class="mb-5">
            <label class="font-bold mb-1 text-gray-700 block">City</label>
            <input type="text"
                   wire:model="city"
                   class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                   placeholder="Enter your city...">
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div class="mb-5">
            <label class="font-bold mb-1 text-gray-700 block">Birthday</label>
            <input type="number"
                   wire:model="birthDay"
                   class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
            >
        </div>

        <div class="mb-5">
            <label class="font-bold mb-1 text-gray-700 block">Birth Month</label>
            <input type="number"
                   wire:model="birthMonth"
                   class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
            >
        </div>

        <div class="mb-5">
            <label class="font-bold mb-1 text-gray-700 block">Birth Year</label>
            <input type="number"
                   wire:model="birthYear"
                   class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
            >
        </div>
    </div>

    <div class="mb-5">
        <button
            wire:click="navigateToMarriageForm"
            class="w-32 focus:outline-none border border-transparent py-2 px-5 rounded-lg shadow-sm text-center text-white bg-blue-500 hover:bg-blue-600 font-medium"
        >Next
        </button>
    </div>
</div>

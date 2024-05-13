<div>

    <div class="mx-auto py-2">
        @foreach ($errors->all() as $error)
            <li class="text-red-500">{{ $error }}</li>
        @endforeach
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div class="mb-5">
            <label class="font-bold mb-1 text-gray-700 block">Are you married ?</label>
            <select wire:model.live="isMarried"
                    class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium">
                <option value="" selected>Select option</option>
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>
        </div>
    </div>

    @if($isMarried == 'yes')
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="mb-5">
                <label class="font-bold mb-1 text-gray-700 block">Marriage Day</label>
                <input type="number"
                       wire:model="marriageDay"
                       class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                >
            </div>

            <div class="mb-5">
                <label class="font-bold mb-1 text-gray-700 block">Marriage Month</label>
                <input type="number"
                       wire:model="marriageMonth"
                       class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                >
            </div>

            <div class="mb-5">
                <label class="font-bold mb-1 text-gray-700 block">Marriage Year</label>
                <input type="number"
                       wire:model="marriageYear"
                       class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                >
            </div>

            <div class="mb-5">
                <label class="font-bold mb-1 text-gray-700 block">Marriage Country</label>
                <input type="text"
                       wire:model="marriageCountry"
                       class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                >
            </div>
        </div>
    @endif

    @if($isMarried == 'no')
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="mb-5">
                <label class="font-bold mb-1 text-gray-700 block">Are you widowed ?</label>
                <select wire:model="isWidowed"
                        class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium">
                    <option value="">Select option</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
            </div>

            <div class="mb-5">
                <label class="font-bold mb-1 text-gray-700 block">Have you ever been married in the past
                    ?</label>
                <select wire:model="isMarriedInPast"
                        class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium">
                    <option value="">Select option</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
            </div>
        </div>
    @endif

    <div class="mb-5 flex justify-between">
        <button
            wire:click="$parent.setActiveTab('basic_information_tab')"
            class="w-32 focus:outline-none py-2 px-5 rounded-lg shadow-sm text-center text-gray-600 bg-white hover:bg-gray-100 font-medium border"
        >Previous
        </button>

        <button
            wire:click="navigateToOutputTab"
            class="w-32 focus:outline-none border border-transparent py-2 px-5 rounded-lg shadow-sm text-center text-white bg-blue-500 hover:bg-blue-600 font-medium"
        >Next
        </button>
    </div>
</div>

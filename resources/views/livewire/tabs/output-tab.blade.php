<div>
    <div class="flex flex-col">
        <h1>Basic Information</h1>
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <table class="min-w-full text-left text-sm font-light">
                        <tbody>
                        <tr
                            class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                            <td class="whitespace-nowrap px-6 py-4 font-medium">First Name</td>
                            <td class="whitespace-nowrap px-6 py-4">{{ $basicInformationData['first_name'] }}</td>
                        </tr>

                        <tr
                                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                            <td class="whitespace-nowrap px-6 py-4 font-medium">Last Name</td>
                            <td class="whitespace-nowrap px-6 py-4">{{ $basicInformationData['last_name'] }}</td>
                        </tr>

                        <tr
                                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                            <td class="whitespace-nowrap px-6 py-4 font-medium">Address</td>
                            <td class="whitespace-nowrap px-6 py-4">{{ $basicInformationData['address'] }}</td>
                        </tr>

                        <tr
                                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                            <td class="whitespace-nowrap px-6 py-4 font-medium">City</td>
                            <td class="whitespace-nowrap px-6 py-4">{{ $basicInformationData['city'] }}</td>
                        </tr>

                        <tr
                                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                            <td class="whitespace-nowrap px-6 py-4 font-medium">Country</td>
                            <td class="whitespace-nowrap px-6 py-4">{{ $basicInformationData['country'] }}</td>
                        </tr>

                        <tr
                                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                            <td class="whitespace-nowrap px-6 py-4 font-medium">Date of birth</td>
                            <td class="whitespace-nowrap px-6 py-4">
                                {{ \Illuminate\Support\Carbon::create($basicInformationData['birth_year'], $basicInformationData['birth_month'], $basicInformationData['birth_day'])->format('Y-m-d') }}
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <div class="flex flex-col">
        <h1>Marriage Information</h1>
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <table class="min-w-full text-left text-sm font-light">
                        <tbody>
                        <tr
                                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                            <td class="whitespace-nowrap px-6 py-4 font-medium">Is married</td>
                            <td class="whitespace-nowrap px-6 py-4">{{ $marriageData['is_married'] }}</td>
                        </tr>

                        @if($marriageData['is_married'] == 'yes')
                            <tr
                                    class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                                <td class="whitespace-nowrap px-6 py-4 font-medium">Marriage Date</td>
                                <td class="whitespace-nowrap px-6 py-4">
                                    {{ \Illuminate\Support\Carbon::create($marriageData['marriage_year'], $marriageData['marriage_month'], $marriageData['marriage_day'])->format('Y-m-d') }}
                                </td>
                            </tr>
                            <tr
                                    class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                                <td class="whitespace-nowrap px-6 py-4 font-medium">Marriage Country</td>
                                <td class="whitespace-nowrap px-6 py-4">
                                    {{ $marriageData['marriage_country'] }}
                                </td>
                            </tr>
                        @endif

                        @if($marriageData['is_married'] == 'no')
                            <tr
                                    class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                                <td class="whitespace-nowrap px-6 py-4 font-medium">Is widowed</td>
                                <td class="whitespace-nowrap px-6 py-4">
                                    {{ $marriageData['is_widowed'] }}
                                </td>
                            </tr>
                            <tr
                                    class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                                <td class="whitespace-nowrap px-6 py-4 font-medium">Is married in past</td>
                                <td class="whitespace-nowrap px-6 py-4">
                                    {{ $marriageData['is_married_in_past'] }}
                                </td>
                            </tr>
                        @endif

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="mb-5">
        <a
            href="/"
            class="w-32 focus:outline-none border border-transparent py-2 px-5 rounded-lg shadow-sm text-center text-white bg-blue-500 hover:bg-blue-600 font-medium"
        >Back to home
        </a>
    </div>

</div>

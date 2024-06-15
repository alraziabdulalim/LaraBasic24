@auth
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Transactions') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!-- Table START -->

                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Entry Date
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Voucher Date
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Transaction No
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        A/C Name
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Details
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Amount (Tk)
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Balance (Tk)
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($transactions as $transaction)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <td class="px-6 py-4 font-medium text-gray-500 whitespace-nowrap dark:text-white">
                                        {{ $transaction->created_at }}
                                    </td>
                                    <td class="px-6 py-4 font-medium text-gray-500 whitespace-nowrap dark:text-white">
                                        {{ $transaction->voucher_at }}
                                    </td>
                                    <td class="px-6 py-4 font-medium text-gray-500 whitespace-nowrap dark:text-white">
                                        {{ $transaction->id }}
                                    </td>
                                    <td class="px-6 py-4 font-medium text-gray-500 whitespace-nowrap dark:text-white">
                                        {{ $transaction->oldacname->name }}
                                    </td>
                                    <td class="px-6 py-4 font-medium text-gray-500 whitespace-nowrap dark:text-white">
                                        {{ $transaction->details }}
                                    </td>
                                    <td class="px-6 py-4 font-medium text-gray-500 whitespace-nowrap dark:text-white">
                                        {{ $transaction->amount }}
                                    </td>
                                    <td class="px-6 py-4 font-medium text-gray-500 whitespace-nowrap dark:text-white">
                                        {{ $transaction->amount }}
                                    </td>
                                    <td class="flex items-center px-6 py-4">
                                        <a href="" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View</a>
                                        <a href="" class="ml-4 font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                        <form action="" method="POST" class="inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="font-medium text-red-600 dark:text-red-500 hover:underline ms-3">Remove</bitton>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-6">
                        {{ $transactions->links() }}
                    </div>

                    <!-- Table END -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
@endauth
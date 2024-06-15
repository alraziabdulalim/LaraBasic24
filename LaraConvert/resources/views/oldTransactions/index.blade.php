@auth
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Transactions') }}
        </h2>
        <div class="flex items-center justify-end mt-4">
            <a href="{{ route('oldTransactions.create') }}">
                <x-primary-button class="ms-4 text-sm text-white-600 hover:text-green-400 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    {{ __('Add New Transaction') }}
                </x-primary-button>
            </a>
            <a href="{{ route('oldTransactions.show') }}">
                <x-primary-button class="ms-4 text-sm text-white-600 hover:text-green-400 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    {{ __('Trans Report') }}
                </x-primary-button>
            </a>
        </div>
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
                                        Post Date
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Vou. Date
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Trans. No
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        A/C Name
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Details
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Debit (Tk)
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Credit (Tk)
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($transactions as $transaction)
                                    @php
                                        $debitAmount = 0;
                                        $creditAmount = 0;
                                    @endphp

                                    <!-- Transaction type check and set to debit-credit -->
                                    @if($transaction->oldactype_id == 1)
                                        @php $debitAmount = $transaction->amount; @endphp
                                    @elseif($transaction->oldactype_id == 2)
                                        @php $creditAmount = $transaction->amount; @endphp
                                    @endif

                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <td class="px-6 py-4 font-medium text-gray-500 whitespace-nowrap dark:text-white">
                                        {{ $transaction->created_at->format('d-m-Y') }}
                                    </td>
                                    <td class="px-6 py-4 font-medium text-gray-500 whitespace-nowrap dark:text-white">
                                    {{ \Carbon\Carbon::parse($transaction->voucher_at)->format('d-m-Y') }}
                                    </td>
                                    <td class="px-6 py-4 font-medium text-gray-500 whitespace-nowrap dark:text-white">
                                        {{ $transaction->id }}
                                    </td>
                                    <td class="px-6 py-4 font-medium text-gray-500 whitespace-nowrap dark:text-white">
                                        {{ $transaction->oldacname->name }}
                                    </td>
                                    <td class="px-6 py-4 font-medium text-gray-500 whitespace-nowrap dark:text-white">
                                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View</a>
                                    </td>
                                    <td class="px-6 py-4 font-medium text-gray-500 whitespace-nowrap dark:text-white">
                                        {{ $debitAmount }}
                                    </td>
                                    <td class="px-6 py-4 font-medium text-gray-500 whitespace-nowrap dark:text-white">
                                        {{ $creditAmount }}
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
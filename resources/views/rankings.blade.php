@extends('layout.app')

@section('content')
    @include('Components.error-message')
    @include('Components.success-message')

    <table class="min-w-full border border-white divide-y divide-gray-700">
        <thead class="bg-gray-900">
            <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                    Rank
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                    User
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                    Task Count
                </th>
            </tr>
        </thead>
        <tbody class="bg-gray-800 divide-y divide-gray-700">
            @php $rank = 1; @endphp
            @foreach ($usersTaskCount as $taskArray)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-white">
                        <div class="text-sm">{{ $rank }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-white">
                        <div class="text-sm">{{ $taskArray['userName'] }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-white">
                        <div class="text-sm">{{ $taskArray['count'] }}</div>
                    </td>
                </tr>
                @php $rank++; @endphp
            @endforeach
        </tbody>
    </table>




@endsection

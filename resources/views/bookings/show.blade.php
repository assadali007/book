@extends('layouts.app')
@section('content') 
<div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-20">
        <h1 class="sm:text-4xl text-3xl font-medium title-font mb-2 text-gray-900">Data of the room ID</h1>
    </div>
    <div class="lg:w-2/3 w-full mx-auto overflow-auto">
        <table class="table-auto w-full text-left whitespace-no-wrap">
            <thead>
              <tr>
                <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">ID</th>
                <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Room ID</th>
                <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Start Dat</th>
                <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">End Date</th>
                <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Reservation?</th>
                <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Paid?</th>
                <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Notes</th>
                <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Created</th>
                <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Updated</th>

            </tr>
            </thead>
            <tbody>
                <tr>
            <td class="px-4 py-3 ">{{  $booking->id  }}</td>
            <td class="px-4 py-3 ">{{ $booking->room_id }}</td>
            <td class="px-4 py-3 ">{{ date('F d, Y', strtotime($booking->start)) }}</td>
            <td class="px-4 py-3 ">{{ date('F d, Y', strtotime($booking->end)) }}</td>
            <td class="px-4 py-3 ">{{ $booking->is_reservation ? 'Yes' : 'No' }}</td>
            <td class="px-4 py-3 ">{{ $booking->is_paid ? 'Yes' : 'No' }}</td>
            <td class="px-4 py-3 ">{{ $booking->room_id }}</td>
            <td class="px-4 py-3 ">{{ date('F d, Y', strtotime($booking->created_at)) }}</td>
            <td class="px-4 py-3 ">{{ date('F d, Y', strtotime($booking->updated_at)) }}</td>


                </tr>
            </tbody>
        </table>
        @foreach ($booking->users as $user )
            <p>{{ $user->name }}</p>
        @endforeach
    </div>
</div>

@endsection

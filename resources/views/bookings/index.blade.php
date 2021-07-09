@extends('layouts.app')
@section('content')
@include('bookings.button')
<table class="shadow-lg bg-white">
    <thead>
        <tr>
            <th class="bg-blue-100 border text-left px-8 py-4">ID</th>
            <th class="bg-blue-100 border text-left px-8 py-4">Room</th>
            <th class="bg-blue-100 border text-left px-8 py-4">Start Date</th>
            <th class="bg-blue-100 border text-left px-8 py-4">End Date</th>
            <th class="bg-blue-100 border text-left px-8 py-4">Reservation?</th>
            <th class="bg-blue-100 border text-left px-8 py-4">Paid?</th>
            <th class="bg-blue-100 border text-left px-8 py-4">Started?</th>
            <th class="bg-blue-100 border text-left px-8 py-4">Passed?</th>
            <th class="bg-blue-100 border text-left px-8 py-4">Created</th>
            <th class="bg-blue-100 border text-left px-8 py-4">Actions</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($bookings as $booking)
            <tr> 
                <td class="border px-8 py-4">{{ $booking->id }}</td>
                <td class="border px-8 py-4">{{ $booking->room->number }} {{ $booking->room->roomType->name }}  </td>
                <td class="border px-8 py-4">{{ date('F d, Y', strtotime($booking->start)) }}</td>
                <td class="border px-8 py-4">{{ date('F d, Y', strtotime($booking->end)) }}</td>
                <td class="border px-8 py-4">{{ $booking->is_reservation ? 'Yes' : 'No' }}</td>
                <td class="border px-8 py-4">{{ $booking->is_paid ? 'Yes' : 'No' }}</td>
                <td class="border px-8 py-4">{{ (strtotime($booking->start) < time()) ? 'Yes' : 'No' }}</td>
                <td class="border px-8 py-4">{{ (strtotime($booking->end) < time()) ? 'Yes' : 'No' }}</td>
                <td class="border px-8 py-4">{{ date('F d, Y', strtotime($booking->created_at)) }}</td>
                <td class="border px-8 py-4">
              <a href="{{route('bookings.show',['booking'=> $booking->id])}}" alt = "View" title="View">View</a>   
              <a href="{{route('bookings.edit',['booking'=> $booking->id])}}" alt = "View" title="View">Edit</a>   
               <form action="{{ route('bookings.destroy',['booking'=> $booking->id])  }}" method="POST">
                 @method('DELETE')
                 @csrf
                  <button type="submit" title="Delete" value="DELETE">Delete</button>
                   </form>               
                </td>
            </tr>
        @empty
        @endforelse
    </tbody>
   
</table>
 <br>
{{ $bookings->links() }}
@endsection

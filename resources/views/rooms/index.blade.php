@extends('layouts.app')
@section('content')
<table class="table-auto">
    <thead>
      <tr>
        <th class="px-4 py-2">Room Number</th>
        <th class="px-4 py-2">Type</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($rooms as $room)
          <tr class="bg-gray-100">
              <td class="border px-4 py-2">{{ $room->number }}</td>
              <td class="border px-4 py-2">{{ $room->room_type_id }}</td>
              <td class="border px-4 py-2">{{ $room->roomType->name }}</td>
          </tr>
      @endforeach
    </tbody>
  </table>
@endsection

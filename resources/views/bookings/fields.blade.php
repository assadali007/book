@csrf
<div class="shadow overflow-hidden sm:rounded-md">
  <div class="px-4 py-5 bg-white sm:p-6">
    <div class="grid grid-cols-6 gap-6">
      <div class="col-span-6 sm:col-span-3">
        <label for="User_name" class="block text-sm font-medium text-blue-700">User</label>
        <select id="user_id" name="user_id" autocomplete="user_id" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
          @foreach($users as $id => $display)
              <option value="{{ $id }}" {{ (isset($bookingsUser->user_id)&&$id===$bookingsUser->user_id)?'selected':''}}  >{{ $display }}</option>
          @endforeach
    </select>
    <label for="User_name" class="block text-sm font-medium text-black-700">The user booking the room</label>
      </div>
      
      <div class="col-span-6 sm:col-span-4">
        <label for="Start date" class="block text-sm font-medium text-blue-700">Start Date</label>
        <input name="start" type="date" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required placeholder="yyyy-mm-dd" value="{{ $booking->start ?? '' }}"/>
        <label for="Start date" class="block text-sm font-medium text-black-700">the start date for booking</label>
      </div>

      <div class="col-span-6 sm:col-span-4">
          <label for="end date" class="block text-sm font-medium text-blue-700">End Date</label>
          <input name="end" type="date" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required placeholder="yyyy-mm-dd" value="{{ $booking->end ?? '' }}"/>
          <label for="end date" class="block text-sm font-medium text-black-700">the end date for booking</label>
        </div>

      <div class="col-span-6 sm:col-span-3">
          <label for="room" class="block text-sm font-medium text-blue-700 ">Room</label>
        <select id="room_id" name="room_id" autocomplete="room_id" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
              @foreach($rooms as $id => $display)
                  <option value="{{ $id }}" {{ (isset($booking->room_id)&&$id===$booking->room_id)?'selected':''}} >{{ $display }}</option>
              @endforeach
        </select>
        <label for="room" class="block text-sm font-medium text-gray-700 ">The room number being booked</label>
      </div>

      <div class="col-span-6">
          <label for="paid option" class="block text-sm font-medium text-blue-700">Paid options</label>
          <label class="flex justify-start items-start">
              <div class="bg-white border-2 rounded border-gray-400 w-5 h-5 flex flex-shrink-0 justify-center items-center mr-2 focus-within:border-blue-500">
                <input type="checkbox" name="is_paid" class="opacity-0 absolute" value="1" {{ $booking->is_paid ? 'checked' : '' }} />
                <svg class="fill-current hidden w-4 h-4 text-green-500 pointer-events-none" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
              </div>
              <div class="select-none">Pre-Paid If the booking is being pre-paid.</div>
            </label>
            
            <style>
              input:checked + svg {
                  display: block;
              }
            </style>
      </div>

      <div class="col-span-6 sm:col-span-4">
        <label for="notes" class="block text-sm font-medium text-blue-700">Note</label>
        <input type="text" name="notes" id="notes" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{ $booking->notes ?? '' }} ">
        <label for="notes" class="block text-sm font-medium text-blue-1200">Any Notes for booking</label>

      </div>
    </div>
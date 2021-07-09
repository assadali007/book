@extends('layouts.app')

@section('content')
      <div class="md:col-span-1">
        <div class="px-28 ">
          <h3 class="text-lg font-medium leading-12 text-black-1200">Room data</h3>
          <p class="mt-2 text-sm text-red-600">
            Use a permanent address where you can receive mail.
          </p>
        </div>
      </div>
      <div class="mt-5 md:mt-0 md:col-span-2">
        <form action="{{ route('bookings.store') }}" method="POST">
        @include('bookings.createfield')
    </div>
              <div class=" px-1  lg:py-4  lg:justify-between">
                <div class="mt-2">
                  <div class="inline-flex rounded-md shadow">
                    <button type="submit" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700"> Add Reservation
                    </button>
                  </div>
                </div>
              </div>
            <div class="inline-flex rounded-md shadow">
                    <a href="{{ route('bookings.index') }}" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-green-900 hover:bg-red-700">
                      Cancel
                    </a>
              </div>
              
            </div>
            </div>
          </div>
        </form>
      </div>
   
@endsection
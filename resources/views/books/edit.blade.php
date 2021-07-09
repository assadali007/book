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
        <form action="{{ route('books.update',['book'=>$book]) }}" method="POST">
            @method('PUT')
            @csrf
<div class="shadow overflow-hidden sm:rounded-md">
  <div class="px-4 py-5 bg-white sm:p-6">
    <div class="grid grid-cols-6 gap-6">
      
      <div class="col-span-6 sm:col-span-4">
        <label for="title" class="block text-sm font-medium text-blue-700">title</label>
        <input name="title" type="text" id="title" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{ $book->title }}" />
      </div>

      <div class="col-span-6 sm:col-span-4">
          <label for="pages_count" class="block text-sm font-medium text-blue-700">Pages_count</label>
          <input name="pages_count" type="number" id="pages_count" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{ $book->pages_count }}" />
        </div>

     

      <div class="col-span-6 sm:col-span-4">
        <label for="description" class="block text-sm font-medium text-blue-700">description</label>
        <input type="text" name="description" id="description" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{ $book->description }}" >
      </div>
      
      <div class="col-span-6 sm:col-span-4">
        <label for="firstname" class="block text-sm font-medium text-blue-700">firstname</label>
        <input type="text" name="first_name" id="description" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{ $book->author->first_name }}" >
      </div>
      <div class="col-span-6 sm:col-span-4">
        <label for="lastname" class="block text-sm font-medium text-blue-700">lastname</label>
        <input type="text" name="last_name" id="description" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{ $book->author->last_name }}" >
      </div>
      <div class="col-span-6 sm:col-span-3">
        <label for="publisher" class="block text-sm font-medium text-blue-700 ">Publisher</label>
      <select id="publisher_id" name="publisher_id" autocomplete="publisher_id" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach($publishers as $id => $name)
            <option value="{{ $id }}" {{ (isset($book->publisher_id)&&$id===$book->publisher_id)?'selected':''}} >{{ $name }}</option>
            @endforeach
      </select>
      <label for="name" class="block text-sm font-medium text-gray-700 ">These publisher are available</label>
    </div>
    <div class="col-span-6 sm:col-span-3">
      <label for="tags" class="block text-sm font-medium text-blue-700 ">Tags</label>
    <select id="tag_id" name="tag_id" autocomplete="tag_id" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
          @foreach($tags as $id => $name)
              <option value="{{ $id }}" {{ (isset($booktag->tag_id)&&$id === $booktag->tag_id)?'selected':''}} >{{ $name }}</option>
          @endforeach
    </select>
    <label for="name" class="block text-sm font-medium text-gray-700 ">These tags your are selected</label>
  </div>
     
    </div>
         
              <div class=" px-1  lg:py-4  lg:justify-between">
                <div class="mt-2">
                  <div class="inline-flex rounded-md shadow">
                    <button type="submit" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700"> Update Book
                    </button>
                    <div class="inline-flex rounded-md shadow">
                        <a href="{{ route('books.index') }}" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-green-900 hover:bg-red-700">
                          Cancel
                        </a>
                  </div>
                  </div>
                </div>
              </div>
            
              
            </div>
            </div>
          </div>
        </form>
      </div>
   
@endsection
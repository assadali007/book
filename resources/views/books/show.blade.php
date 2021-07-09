@extends('layouts.app')
@section('content') 
<div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-20">
        <h1 class="sm:text-4xl text-3xl font-medium title-font mb-2 text-gray-900">Data of the Book ID</h1>
    </div>
    <div class="lg:w-2/3 w-full mx-auto ">
        <table class="table-auto w-full text-left whitespace-no-wrap">
            <thead>
              <tr>
                <th class="bg-blue-100 border text-left px-8 py-4">ID</th>
                <th class="bg-blue-100 border text-left px-8 py-4">title</th>
                <th class="bg-blue-100 border text-left px-8 py-4">pages_count</th>
                <th class="bg-blue-100 border text-left px-8 py-4">description</th>
                <th class="bg-blue-100 border text-left px-8 py-4">firstname</th>
                <th class="bg-blue-100 border text-left px-8 py-4">lastname</th>
                <th class="bg-blue-100 border text-left px-8 py-4">Publisher</th>
                <th class="bg-blue-100 border text-left px-8 py-4">Tag</th>


             

            </tr>
            </thead>
            <tbody>
                <tr>
              <td class="border px-8 py-4">{{ $books['id'] }}</td>
                <td class="border px-8 py-4">{{ $books->title }}</td>
                <td class="border px-8 py-4">{{ $books->pages_count }}</td>
                <td class="border px-8 py-4">{{ $books->description }}</td>
                <td class="border px-8 py-4">{{ $books->author->first_name }}</td>
                <td class="border px-8 py-4">{{ $books->author->last_name }}</td>
                <td class="border px-8 py-4">{{ $books->publisher->name }}</td>
                <td class="border px-8 py-4">{{ $books->tags->pluck('name')->join(',') }}</td>


            


                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection

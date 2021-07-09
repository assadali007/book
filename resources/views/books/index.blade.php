@extends('layouts.app')
@section('content')
@include('books.button')
<table class="shadow-lg bg-white">
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
            <th class="bg-blue-100 border text-left px-8 py-4">Action</th>

        
        </tr>
    </thead>
    <tbody>
        
              @forelse ($books as $book)
            <tr> 
                <td class="border px-8 py-4">{{ $book['id'] }}</td>
                <td class="border px-8 py-4">{{ $book->title }}</td>
                <td class="border px-8 py-4">{{ $book->pages_count }}</td>
                <td class="border px-8 py-4">{{ $book->description }}</td>   
                <td class="border px-8 py-4">{{ $book->author->first_name }}</td>   
                <td class="border px-8 py-4">{{ $book->author->last_name }}</td>   
                <td class="border px-8 py-4">{{ $book->publisher->name }}</td>  
                <td class="border px-8 py-4">{{ $book->tags->pluck('name')->join(', ') }}
                </td> 
                {{-- 
                     @foreach ($book->tags as $tag) 
                <td class="border px-8 py-4">{{ $tag->name }}</td>
            @endforeach
                     --}}
               
        
                <td class="border px-8 py-4">
                 <a href="{{ route('books.show',['book'=>$book->id])}}">View</a>
                 <a href="{{route('books.edit',['book'=> $book->id])}}" alt = "View" title="Edit">Edit</a>   
                 <form action="{{ route('books.destroy',['book'=> $book->id])  }}" method="POST">
                    @method('DELETE')
                    @csrf
                     <button type="submit" title="Delete" value="DELETE">Delete</button>
                      </form>
                    </td> 
            </tr>
        @empty
        @endforelse

             {{-- 
                 @if (count($books)>0)
        @foreach ($books as $book)
        <tr> 
            <td class="border px-8 py-4">{{ $book->id }}</td>
                <td class="border px-8 py-4">{{ $book->title }}</td>
                <td class="border px-8 py-4">{{ $book->pages_count }}</td>
                <td class="border px-8 py-4">{{ $book->description }}</td>
                <td class="border px-8 py-4">{{ $book->created_at }}</td>
                <td class="border px-8 py-4">{{ $book->updated_at }}</td>    
        </tr>            
        @endforeach
            
        @else
            no result
        @endif
                --}}
               
               
    </tbody>
</table>
{{ $books->links() }}
@endsection



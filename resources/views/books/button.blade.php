<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>book</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class=" px-12  lg:py-4  lg:justify-between">
      <div class="mt-2">
        <div class="inline-flex rounded-md shadow">
          <a href="{{ route('books.create') }}" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">
            Add New Book
          </a>
        </div>
      </div>
    </div>
</body>
</html>
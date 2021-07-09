@csrf
<div class="shadow overflow-hidden sm:rounded-md">
  <div class="px-4 py-5 bg-white sm:p-6">
    <div class="grid grid-cols-6 gap-6">
      
      <div class="col-span-6 sm:col-span-4">
        <label for="title" class="block text-sm font-medium text-blue-700">title</label>
        <input name="title" type="text" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
      </div>

      <div class="col-span-6 sm:col-span-4">
          <label for="pages_count" class="block text-sm font-medium text-blue-700">Pages_count</label>
          <input name="pages_count" type="number" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
        </div>

     

      <div class="col-span-6 sm:col-span-4">
        <label for="description" class="block text-sm font-medium text-blue-700">description</label>
        <input type="text" name="description" id="description" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" >
      </div>
      <div class="col-span-6 sm:col-span-4">
        <label for="description" class="block text-sm font-medium text-blue-700">description</label>
        <input type="text" name="description" id="description" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" >
      </div>
      <div class="col-span-6 sm:col-span-4">
        <label for="firstname" class="block text-sm font-medium text-blue-700">firstname</label>
        <input type="text" name="first_name" id="first_name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" >
      </div>
      <div class="col-span-6 sm:col-span-4">
        <label for="lastname" class="block text-sm font-medium text-blue-700">firstname</label>
        <input type="text" name="last_name" id="last_name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" >
      </div>
      <div class="col-span-6 sm:col-span-3">
        <label for="publisher" class="block text-sm font-medium text-blue-700 ">Publisher</label>
      <select id="publisher_id" name="publisher_id" autocomplete="publisher_id" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach($publishers as $id => $name)
                <option value="{{ $id }}">{{ $name }}</option>
            @endforeach
      </select>
      <label for="name" class="block text-sm font-medium text-gray-700 ">These publisher are available</label>
    </div>
    <div class="col-span-6 sm:col-span-3">
      <label for="tags" class="block text-sm font-medium text-blue-700 ">Tags</label>
    <select id="tag_id" name="tag_id" autocomplete="tag_id" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
          @foreach($tags as $id => $name)
              <option value="{{ $id }}">{{ $name }}</option>
          @endforeach
    </select>
    <label for="name" class="block text-sm font-medium text-gray-700 ">These tags your are selected</label>
  </div>

    </div>
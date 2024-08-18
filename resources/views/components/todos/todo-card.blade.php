 <li class="bg-gray-100 p-4 rounded-lg shadow-md flex justify-between items-center">
     <a href="{{ route('showTodo', $todo->id) }}" class="text-lg font-semibold">{{ $todo->title }}</a>
     <div class="flex space-x-2">
         <a href="{{ route('editTodo', $todo->id) }}" class="text-blue-500 hover:underline">Edit</a>
         <form action="{{ route('destroyTodo', $todo->id) }}" method="POST" onsubmit="return confirm('Are you sure?')">
             @csrf
             @method('DELETE')
             <button type="submit" class="text-red-500 hover:underline">Delete</button>
         </form>
     </div>
 </li>

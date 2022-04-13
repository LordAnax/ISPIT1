<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Todo Lista') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div style="height:60vh;display:flex;flex-direction:column" class="p-6 bg-white border-b border-gray-200">
          <div id="poruke" style="flex-grow:1;margin:10px">
            <form style="flex-grow:0;margin:5px;" method="POST" action=>
              @csrf
              <input type="text" name="zadatak" placeholder="Zadatak" />
              <input type="submit" value="Upisi Zadatak" />
            </form>

            <h2>Zadatci:</h2>
            <ul>


              @foreach($zadatci as $zadatak)
              <li>{{$zadatak->name}} - {{$zadatak->zadatak}} - {{$zadatak->created_at}} -
                <form style="display: inline-block" action="{{ route('todo.destroy', $zadatak->id) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button title="Delete">Delete</button>
                </form>
              </li>
              @endforeach











            </ul>
          </div>

        </div>
      </div>
    </div>
  </div>
</x-app-layout>
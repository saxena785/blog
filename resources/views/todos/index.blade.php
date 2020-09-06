
<div>
<h1 class="text-2xl">All your Todos </h1>
<a href = "/todos/create" class = "text-2xl">Create New </a>
</div>
<ul>
  @foreach ($todos as $todo)

   <li>
    <p>{{$todo ->title}}</p>
    <a href ="{{'/todos/'.$todo->id.'/edit'}}" class ="text-2xl">Edit</a>
  </li>
  @endforeach

  </ul>


</body>
</html>



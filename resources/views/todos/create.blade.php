@extends('todos.layout');


@section('content')
<h1 class="text-2xl">What next to do </h1>
<form method ="Post" action="/todos/create" class="py-5">
@csrf
<input type="text" name="title" Placeholder="Please enter title" class="px-2 py-3">

<input type ="submit" name="submit" value="submit" />
</form>

<a href ="/todos" class ="text-2xl">Back</a>
@endsection
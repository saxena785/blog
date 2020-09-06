<!DOCTYPE html>
<html>
<head>
<title>Todos</title>
</head>
<body>

<div class="text-center pt-10">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<h1 class="text-2xl">What next to do </h1>
<form method ="Post" action="/todos/create" class="py-5">
@csrf
<input type="text" name="title" Placeholder="Please enter title" class="px-2 py-3">

<input type ="submit" name="submit" value="submit" />
</form>
</div>

</body>
</html>


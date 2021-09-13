<h1>Book catalog</h1>
<br>
<a href="{{ route('create') }}" class="btn btn-primary">Add a book</a>
<br>
<a href="{{ route('show',['id'=>1]) }}" class="btn btn-primary">Show a book tag</a>
<br>
<a href="{{ route('edit') }}" class="btn btn-primary">Update book</a>
<br>
<a href="{{ route('delete',['id'=>1]) }}" class="btn btn-primary">Delete book</a>


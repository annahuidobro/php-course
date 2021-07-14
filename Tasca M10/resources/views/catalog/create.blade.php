This is the creation book tag view with blade
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create a Book Tab</title>
    <style>
        .errors {
            background-color: #fcc;
            border: 1px solid #966;
        }

        form {
            margin-top: 20px;
            line-height: 1.5em;
        }

        label {
            display: inline-block;
            width: 120px:
        }
    </style>
</head>
<body>
<h1>Creation of a Book tab</h1>
@if(count($errors) > 0)
    <div class="errors">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="/tasca-m10/public/catalog/store" method="post">
    <label for="name">Name:</label>
    <input type="text" value="{{old('name')}}" name="name" />
    <br/>
    <label for="author">Author:</label> <input type="text" value="{{old('author')}}" name="author" />
    <br/>
    <label for="publication_date">Publicatin Date:</label>
    <input type="text" value="{{old('publication_date')}}" name="publication_date" />
    <br/>
    <label for="abstract">Abstract:</label>
    <input type="text" value="{{old('abstract')}}" name="abstract" />
    <br/>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>

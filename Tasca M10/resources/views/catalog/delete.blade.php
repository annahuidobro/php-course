This is the {{  $book['name'] }} edit  page with blade
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete Book Tab</title>
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
<h1>Delete of a Book tab</h1>
@if(count($errors) > 0)
    <div class="errors">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

<div>
    <h2>The Book tag {{ $book['name']}} has been deleted!</h2>
    <a href="http://localhost/tasca-m10/public/catalog">Go back</a>
</div>
</body>
</html>

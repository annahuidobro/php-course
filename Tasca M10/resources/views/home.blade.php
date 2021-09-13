Welcome to Library home page with blade
<br>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home page</title>
    <style>
        .errors {
            background-color: #9aa03f;
            border: 1px solid #144c86;
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

<x-nav-bar></x-nav-bar>

@if(count($errors) > 0)
    <h3>Errors</h3>
    <div class="errors">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
<a href="/tasca-m10/public/login">Login</a>
<br>
<a href="/tasca-m10/public/register">Register</a>
<br>
<a href="/tasca-m10/public/passrecovery">Password Recovery</a>

</body>
</html>

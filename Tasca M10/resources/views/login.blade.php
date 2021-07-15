This is login page with blade
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login page</title>
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
<x-nav-bar></x-nav-bar>
<h1>Login Page</h1>
@if(count($errors) > 0)
    <div class="errors">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="/tasca-m10/public/login" method="post">
    <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
    <label for="user">User:</label>
    <input type="text" value="" name="user" />
    <br/>
    <label for="password">Password:</label>
    <input type="text" value="" name="password" />
    <br/>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>

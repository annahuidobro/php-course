This is the password recovery page
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Password recovery page</title>
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
<h1>Password Recovery Page</h1>
@if(count($errors) > 0)
    <div class="errors">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="/tasca-m10/public/passrecovery" method="post">
    <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
    <label for="user">User:</label>
    <input type="text" value="" name="user" />
    <br/>
    <label for="password">Email:</label>
    <input type="text" value="" name="email" />
    <br/>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>

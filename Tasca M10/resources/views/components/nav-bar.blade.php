@if (Cookie::get('user') != null)
    <div class="welcome">
        Welcome back {{ Cookie::get('user') }}
    </div>
@endif

<style>
    .welcome {
        border: 1px dashed #333;
        background-color: #f1f1f1;
        padding: 15px;
        margin: 15px 0;
    }
</style>

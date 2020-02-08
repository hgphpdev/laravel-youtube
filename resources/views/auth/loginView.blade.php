<form action="{{route('loginSubmit')}}" method="post">
    @csrf
    <input type="email" name="email">
    <input type="password" name="password">
    <button type="submit">
        Submit
    </button>
</form>
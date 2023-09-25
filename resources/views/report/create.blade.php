<h2>Create report</h2>

<form method="POST" action="{{ url('/reports') }}">
    @csrf

    <p>Title</p>
    <input type="text" name="title">
    <p>
        {{ $errors->has('title') ? $errors->first('title') : '' }}
    </p>

    <p>Body</p>
    <textarea name="body" cols="30" rows="10"></textarea>

    <p>
        {{ $errors->has('body') ? $errors->first('body') : '' }}
    </p>

    <p></p>
    <button type="submit">Submit</button>
</form>

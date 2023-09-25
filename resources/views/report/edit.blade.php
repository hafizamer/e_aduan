<h2>Edit report {{$report->title}}</h2>

<form method="POST" action="{{ url('/reports/'.$report->id ) }}">
    @csrf
    @method('PATCH')
    <p>Title</p>
    <input type="text" name="title" value="{{$report->title}}">
    <p>
        {{ $errors->has('title') ? $errors->first('title') : '' }}
    </p>

    <p>Body</p>
    <textarea name="body" cols="30" rows="10">{{$report->body}}</textarea>

    <p>
        {{ $errors->has('body') ? $errors->first('body') : '' }}
    </p>

    <p></p>
    <button type="submit">Submit</button>
</form>

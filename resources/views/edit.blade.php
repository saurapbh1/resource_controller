<body>
<h1>Update Comments: </h1><br>

{{ Session::get('message') }}

<form method="post" action="{{url('comments', $data['id'])}}">
    <input name="_method" type="hidden" value="PUT">
    {{csrf_field()}}
Name: <input type="text" name="name" id="name" value="{{$data['name']}}"><br>
Comment: <input type="text" name="comment" id="comment" value="{{$data['comments']}}">
<input type="submit">
</form>
</body>
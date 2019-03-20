<body>
<h1>Comments: </h1><br>

{{ Session::get('message') }}
<table border="1">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Comment</th>
        <th></th>
        <th></th>
    </tr>
@foreach($comments as $com)
        <tr>
            <td>{{$com->id}}</td>
            <td>{{$com->name}}</td>
            <td>{{$com->comments}}</td>
            {{--<td><a href="comments/".{{$com->id}}>DELETE</a></td>--}}
            <td>
                <a href="{{url('comments/'.$com->id.'/edit')}}">EDIT</a>
            </td>
            <td>
                <form action="{{url('comments', $com->id)}}" method="post">
                    {{csrf_field()}}
                    <input name="_method" type="hidden" value="DELETE">
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
</body>
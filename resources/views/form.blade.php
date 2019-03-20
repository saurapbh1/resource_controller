<body>

{{ Session::get('message') }}

<h1>Form: </h1>

<form action="{{url('comments')}}" method='post'>
    {{csrf_field()}}
    <input type="text" name="name" id="name" placeholder="Enter name"> <br>
    <input type="text" name="comment" id="comment" placeholder="Enter Comment">
    <input type="submit" name="submit" id="submit">Submit
</form>
</body>
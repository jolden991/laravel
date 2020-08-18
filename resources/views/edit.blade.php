@extends('base')
@section('main')

@if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif



















<h1 >Update  Record</h1>  <br> <br> <br>

       
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  
</head>
<bodY >



<fieldset   style='width:500px;  border:2px double #f2f2f2;
 margin:200px; padding:40px; background:#f2f2f2;
 box-shadow: 5px 10px   10px 8px silver; 
 border-radius:10px;'>

<form  action="{{ route('students.update', $contact['id'])}}" method="POST"  >

@csrf
@method('PUT')
      

<div class="form-group">
<i>Title</i><input type="text"  name="title"   value="{{ $contact['title'] }}"   class="form-control"    > </div> <br> <br>
<i>Description</i><textarea name="description"    value="{{ $contact['description'] }}"      class="form-control"           > </textarea> <br> <br>
<input type="submit"  name="submit"     class="btn btn-success"         >
</fieldset>





</form>

</body>
</html>
@endsection
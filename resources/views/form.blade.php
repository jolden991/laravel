

@extends('base')
@section('main')




@if ($errors->any())
      <div >
        <ul>
            @foreach ($errors->all() as $error)
<script>  alert(  "  {{ $error }}" );  </script>
            @endforeach
        </ul>
      </div><br />
    @endif

<html lang="en">

<body    >
<h   style="font-size:40px;  border:2px double white;  border-radius:10px;  
       box-shadow: 5px 10px   10px  silver;  "> <strong><i> INSERT RECORD </i></strong>   
               </h>    



<fieldset   style='width:500px;  border:2px double #f2f2f2;
 margin:200px; padding:40px; background:#f2f2f2;
 box-shadow: 5px 10px   10px 8px silver; 
 border-radius:10px;'>

<form method="GET" action="crud"             >
@csrf
<div class="form-group">

<i>Title</i><input type="text"  name="title"   class="form-control"  placeholder="Enter title"   > </div> <br> <br>
<i>Description</i><textarea  name="description"        class="form-control"           > </textarea> <br> <br>
<input type="submit"  name="submit"     class="btn btn-success"         >
</fieldset>





</form>

</body>
</html>
@endsection
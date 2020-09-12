 

@extends('base')
@section('main')






<html lang="en">

<body    >
<h   style="font-size:40px;  border:2px double white;  border-radius:10px;  
       box-shadow: 5px 10px   10px  silver;  "> <strong><i> INSERT RECORD </i></strong>   
               </h>    



<fieldset   style='width:500px;  border:2px double #f2f2f2;
 margin:200px; padding:40px; background:#f2f2f2;
 box-shadow: 5px 10px   10px 8px silver; 
 border-radius:10px;'>

<form  action="crud"  method="GET"  >
@csrf
<div class="form-group">

<i>Title</i><input type="text"  name="title"          class="form-control "  placeholder="Enter title"   > 
<span  style='color:red;'> {{$errors->first('title')}} </span>                    </div> <br> <br>
<i>Description</i><textarea  name="description"        class="form-control"           > </textarea>
 <span  style='color:red;'> {{$errors->first('description')}} </span><br> <br>
<input type="submit"  name="submit"     class="btn btn-success"         >
</fieldset>





</form>

</body>
</html>
@endsection
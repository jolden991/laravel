@extends('base')
@section('main')
<?php   echo session('data')['title'];       ?>


<form action="search" method="get">
<input  type="text" placeholder="Search" aria-label="Search" name="query"         >


  <input  type="submit" placeholder="Search" aria-label="Search"   class="btn btn-warning"     name="search"  value="search record"    >
  </form>
  <a href="{{ route('students.index')}}"  class="btn btn-info"    style="margin-left:600px;margin-top:0px;"     >Refresh  page</a>



  <?php      if(isset($_GET['search'])) {        ?>    
    <table border="5"        class="jy"
<thead   style="background-color:silver" >

<tr> <th>  id   </th>  <th>title</th>   <th>description</th>         
                    </tr>     </thead>
     <tbody   style="background-color:#f2f2f2;;"      cellpadding="30"          >               
@foreach($dataa as $i)
<tr> <td>  {{$i->id}}  </td> 

<td>  {{$i->title}}  </td>
<td>  {{$i->description}}  </td>
</tr>
@endforeach
</tbody>    </table>
<?php  }    ?>
































<div  >
  @if(session()->get('success'))
    <div   class="alert alert-success"  style="width:500px;"  >
      {{ session()->get('success') }}  
    </div>
  @endif
</div>

<div  >
  @if(session()->get('del'))
    <div   class="alert alert-danger"   style="width:500px;" >
      {{ session()->get('del') }}  
    </div>
  @endif
</div>
<div  >
  @if(session()->get('up'))
    <div   class="alert alert-info"  style="width:500px;"  >
      {{ session()->get('up') }}  
    </div>
  @endif
</div>




















<a href="form" class="btn btn-primary"  style="margin-top:50px;"   >Add record</a>




<br><br><br>
<table border="5"         class="jy"    >




<thead   style="background-color:silver" >

<tr> <th>  id   </th>  <th>title</th>   <th>description</th> <th colspan='5'    >Actions <hr> <h style="padding-right:20px;  padding-left:15px;"> show  </h> 
<h style="padding-left:70px;"> Update  </h> <h style="padding-left:80px;"> Delete  </h  >         
                    </th>    </tr>     </thead>
     <tbody   style="background-color:#f2f2f2;;"      cellpadding="30"          >               
@foreach($data as $i)
<tr> <td>  {{$i->id}}  </td> 
<td>  {{$i->title}}  </td>
<td>  {{$i->description}}  </td>      

<td>    <a href="{{ route('students.show',$i->id)}}" class="btn btn-warning">show</a>                    </td>
<td>
                <a href="{{ route('students.edit',$i->id)}}"   class="btn btn-success">Edit</a>
            </td>
 <td>  
 <form action="{{ route('students.destroy', $i->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button  type="submit"   onclick="return dis();"   class="btn btn-danger"     >Delete</button>
                </form>


 
 
        </td>  
                                   </tr>
@endforeach
</tbody>



</table>




<script>    

function dis(){return  confirm("Are you sure want to delete this record");}





     </script>

     <br> <br> <br>




     {{ $data->links() }}




     @endsection




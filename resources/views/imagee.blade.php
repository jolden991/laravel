<table  border="2">

<thead   style="background-color:silver" >

<tr> <th>  id   </th>  <th>image</th>     </thead>
     <tbody   style="background-color:#f2f2f2;;"               >               
@foreach($data as $i)
<tr> <td>  {{$i->id}}  </td> <td> <img src="{{asset('uploads/view/'.$i->image)}}" >  </td> </tr>
@endforeach
</tbody>
</table>
<div  >
  @if(session()->get('success'))
    <div   class="alert alert-success"  style="width:500px;"  >
      {{ session()->get('success') }}  
    </div>
  @endif
</div>


@extends('base')
@section('main')



<strong>Details</strong> <br> <br> <br>

<strong style="margin-right:10px;">title:</strong>{{$student['title']}}  <br> <br> 
<strong  style="margin-right:10px;"   >Description:</strong>{{$student['description']}} <br> <br> 
<a href="{{ route('students.index')}}"  class="btn btn-info"         >back</a>
@endsection
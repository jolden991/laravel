




<table border="5"         style=" width:600px;   border:2px double silver;  border-radius:2px;       box-shadow: 5px 10px 
  10px 8px silver;  "           >

@extends('base')
@section('main')
<form action="{{URL::to('/file')}}" method="get"  enctype="multipart/form-data"  >
<input  type="file" placeholder="Search" aria-label="Search" name="image">
<input  type="hidden" placeholder="Search" aria-label="Search" name="_token"    value="{{csrf_token()}}"    >


  <input  type="submit" placeholder="Search" aria-label="Search"  name="button">
  </form>


@endsection

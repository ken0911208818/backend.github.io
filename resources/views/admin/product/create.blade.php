@extends('layouts/app');

@section('content')




<div class="container">

   <form method="post" action="/home/product/store">
    @csrf
    <div class="form-group">
      <label for="img">img-url</label>
    <input type="text" class="form-control" id="img" name="img" >
    </div>
    <div class="form-group">
        <label for="kinds">種類</label>
    <input type="text" class="form-control" id="kinds" name="kinds" >
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

</div>


@endsection
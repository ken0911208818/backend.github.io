@extends('layouts/app');

@section('css')
    <style>

    </style>
@endsection
@section('content')



 <div class="container">

    <form method="post" action="/home/news/update/{{$data->id}}" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="img">現有圖片</label>
            <img src="{{$data->img}}" alt="" class="img-fluid" width="200px">
            <br>
            <label for="img">重新上傳圖片</label>
            <input type="file" class="form-control" id="img" name="img">
        </div>
        <hr>
        <div class="form-group">
            <label for="img">內頁圖片</label>
            <div class="d-flex">
                @foreach ($data ->newsimg as $item)
                <div class="col-2">
                    <button class="btn btn-danger" type="button">X</button>
                    <img src="{{$item->img_url}}" alt="" class="img-fluid" width="200px">
                </div>
                @endforeach
            </div>


            <br>
            <label for="img">重新上傳圖片</label>
            <input type="file" class="form-control" id="img" name="img">
        </div>
        <hr>
        <div class="form-group">
            <label for="title">title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{$data->title}}">
        </div>
        <div class="form-group">
            <label for="sort">title</label>
            <input type="number" class="form-control" id="sort" name="sort" value="{{$data->sort}}">
        </div>
        <div class="form-group">
            <label for="content">content</label>
            <textarea name="content" id="content" cols="30" rows="10" class="form-control">{{$data->content}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>


    </form>

</div>


@endsection

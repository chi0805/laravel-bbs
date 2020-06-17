@extends('layout')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col col-md-9">
        <nav class="panel panel-default">
          <div class="panel-heading">投稿</div>
          <div class="panel-body">
          </div>
          <div class="card">
            @foreach($records as $record)
              <div href="#" class="card-body">
                <img src="{{ asset('images/test.JPG') }}" class="card-img-top" alt="カードの画像" style="width:80%;">
                <h5 class="card-title">{{ $record->title }}</h5>
                <p class="card-text">
                  {{ $record->message }}
                </p>
              </div>
            @endforeach
          </div>
        </nav>
      </div>
    </div>
  </div>
@endsection


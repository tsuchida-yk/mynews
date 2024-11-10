@extends('layouts.front')

@section('content')
    <div class="container">
        <hr color="#c0c0c0">
        <div class="row">
            <div class="posts col-md-8 mx-auto mt-3">
                @foreach($posts as $post)
                    <div class="post">
                        <div class="row">
                            <div class="text col-md-6">
                                <div class="form-group row">
                                    <label class="col-md-3">氏名</label>
                                    <div class="col-md-8">
                                        {{ Str::limit($post->name, 150)  }}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3">性別</label>
                                    <div class="col-md-8">
                                        @if($post -> gender == "man")
                                            男性
                                        @elseif($post -> gender == "woman")
                                            女性
                                        @elseif($post -> gender == "other")
                                            未回答
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3">趣味</label>
                                    <div class="col-md-8">
                                         {{ Str::limit($post->hobby, 150) }}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3">自己紹介</label>
                                    <div class="col-md-8">
                                          {{  Str::limit($post->introduction, 1500)  }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr color="#c0c0c0">
                @endforeach
            </div>
        </div>
    </div>
@endsection
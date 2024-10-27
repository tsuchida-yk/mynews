@extends('layouts.profile')
@section('title', 'プロフィールの編集')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>プロフィール編集</h2>
                <form action="{{ route('admin.profile.update') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2">氏名</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" value="{{ $profile_form->name }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">性別</label>
                        <label class="col-md-3">
                          @if($profile_form -> gender == "man")
                             <input type="checkbox" name="gender" value="man" checked>
                          @else
                               <input type="checkbox" name="gender" value="man">
                          @endif
                                 男性
                        </label>
                        <label class="col-md-3">
                            @if($profile_form -> gender == "woman")
                                <input type="checkbox" name="gender" value="woman" checked>
                            @else
                                <input type="checkbox" name="gender" value="woman">
                            @endif
                                    女性
                        </label>
                        <label class="col-md-3">
                            @if($profile_form -> gender == "other")
                                <input type="checkbox" name="gender" value="other" checked>
                            @else
                                <input type="checkbox" name="gender" value="other">
                            @endif
                                    未回答
                        </label>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">趣味</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="hobby" value="{{ $profile_form->hobby }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">自己紹介</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="introduction" rows="20">{{ $profile_form->introduction }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-10">
                            <input type="hidden" name="id" value="{{ $profile_form->id }}">
                            @csrf
                            <input type="submit" class="btn btn-primary" value="更新">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@extends('layouts.app')
@section('page-content')
<!-- page content -->
    <div class="page-title">
      <div class="title_left">
        <h3>Configure Theme </h3>
      </div>
    </div>

    <div class="clearfix"></div>
       <form  method="POST" action="/theme/configure/{{$theme->id}}" enctype="multipart/form-data">
                      {{csrf_field()}}
                   {{ method_field('PUT') }}
                    <div class="form-group">
                    <label for="name">name</label>
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong style="color:red;">{{ $errors->first('name') }}</strong >
                        </span>
                    @endif
                    <input type="text" class="form-control" name="name" value="{{$theme->name}}" disabled>
                   </div>
                    <div class="form-group">
                    <label for="max_gallery_photos">Maximum Number of Gallery Photos</label>
                    @if ($errors->has('max_gallery_photos'))
                        <span class="help-block">
                            <strong style="color:red;">{{ $errors->first('max_gallery_photos') }}</strong >
                        </span>
                    @endif
                    <input type="number" class="form-control" name="max_gallery_photos" value={{$getMaxGalleryPhotos}}>
                   </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                  @include('errors.error')
                </form>

    </div>


<!-- /page content -->
@endsection

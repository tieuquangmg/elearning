@extends('_basic.master')
@section('content')
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="{{route('admin')}}"><span class=" glyphicon glyphicon-home"></span></a></li>
            <li><a >Media</a></li>
            <li><a href="#">Bộ sưu tập hình ảnh</a></li>
        </ol>
        <div class="row">
            <div class="col-md-8">
                @if($galleries->count()>0)
                    <table class="table table-bordered table-responsive">
                        <tr >
                            <th>Name of the gallery</th>
                            <th></th>
                        </tr>
                        @foreach($galleries as $row)
                            <tr>
                                <td>
                                    {{$row->name}}
                                    <span class="pull-right">
                                        {{$row->images()->count()}}
                                    </span>
                                </td>
                                <td>
                                    <a class="" href="{{route('post.gallery.find', $row->id)}}"><span class="glyphicon glyphicon-folder-open"></span></a>
                                    <a class="pull-right" href="{{route('post.gallery.delete', $row->id)}}"><span style="color: red" class="glyphicon glyphicon-trash"></span></a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                @endif
            </div>
            <div class="col-md-4">
                <form class="form" method="post" action="{{route('post.gallery.create')}}">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" id="gallery_name" placeholder="Tên của bộ sưu tập hình ảnh ... ">
                    </div>
                    <button class="btn btn-primary">Lưu</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('bot')
@endsection
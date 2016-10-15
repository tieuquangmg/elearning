<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <ul class="list-group">
                <li class="text-center list-group-item">  <h2 >Danh sách  <b class="blue-xin">Môn học</b></h2></li>
            </ul>
            <div class="panel-body">
                <section class="publicaciones-blog-home" >

                    @foreach($subjects = \App\Modules\Subject\Models\Subject::orderBy('id', 'desc')->paginate(8) as $row)
                        <div class="hidden-sm col-page col-sm-6 col-md-4 col-lg-3">
                            <a href="{{route('study.subject', $row->id)}}" class="fondo-publicacion-home">
                                <div class="img-publicacion-home">
                                    <img class="img-responsive" width="100%" src="{{asset(''.$row->image)}}">
                                </div>
                                <div class="contenido-publicacion-home text-center">
                                    <h4><strong>{{$row->name}}</strong></h4>
                                    <p class="text-justify">{{str_limit($row->description, 200)}}<span>...</span></p>
                                </div>
                                <div class="mascara-enlace-blog-home">
                                    <span>Chi tiết</span>
                                </div>
                            </a>
                        </div>
                    @endforeach

                </section>
            </div>
            <div class="panel-footer text-right">
                {{$subjects->render()}}
            </div>
        </div>
    </div>
</div>
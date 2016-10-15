
    <div class="container">
        <section class="publicaciones-blog-home">
        <div class="">
            <h2>Lorem  <b>Ipsum</b></h2>
            <div class="row-page row">
                <div class="col-page col-sm-8 col-md-6">
                    <a href="" class="black fondo-publicacion-home">
                        <div class="img-publicacion-principal-home">
                            <img class="" src="https://placeholdit.imgix.net/~text?txtsize=34&txt=&w=500&h=300">
                        </div>
                        <div class="contenido-publicacion-principal-home">
                            <h3>Neque porro quisquam est qui dolorem ipsum</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed placerat porta ex, sed ullamcorper ipsum lacinia nec.<span>...</span></p>
                        </div>
                        <div class="mascara-enlace-blog-home">
                            <span>Lorem </span>
                        </div>
                    </a>
                </div>


                @foreach(\App\Modules\Subject\Models\Subject::limit(1)->orderBy('id', 'desc')->get() as $row)
                <div class="hidden-sm col-page col-sm-4 col-md-3">
                    <a href="" class="fondo-publicacion-home">
                        <div class="img-publicacion-home">
                            <img class="img-responsive" src="{{asset(''.$row->image)}}">
                        </div>
                        <div class="contenido-publicacion-home">
                            <h3>{{$row->name}}</h3>
                            <p>{{$row->description}}<span>...</span></p>
                        </div>
                        <div class="mascara-enlace-blog-home">
                            <span>Chi tiết </span>
                        </div>
                    </a>
                </div>
                @endforeach


                @foreach(\App\Modules\Organize\Models\Classes::limit(1)->get() as $row)
                <div class="col-page col-sm-4 col-md-3">
                    <a href="#" class="todas-las-publicaciones-home">
                        <span>{{$row->name}}</span>
                        <p>{{$row->description}}<span>...</span></p>
                    </a>

                    <div class="mascara-enlace-blog-home">
                        <span>Chi tiết </span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        </section>
    </div>

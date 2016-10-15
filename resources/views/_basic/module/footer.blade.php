<footer class="footer">
    <div class="container" style="color:white">
        <a class="btn btn-social-icon btn-twitter">
            <span class="fa fa-twitter"></span>
        </a>
        <a class="btn btn-social-icon btn-facebook">
            <span class="fa fa-facebook"></span>
        </a>
        <a class="btn btn-social-icon btn-google">
            <span class="fa fa-google"></span>
        </a>
        {{--@if(auth()->check())--}}
            {{--@role('admin')--}}
            {{--<a class="btn btn-social-icon btn-facebook">--}}
                {{--<span class="fa fa-facebook"></span>--}}
            {{--</a>--}}
            {{--@endrole--}}
            {{--<a class="btn btn-social-icon btn-google">--}}
                {{--<span class="fa fa-google"></span>--}}
            {{--</a>--}}

            {{--@if(auth()->user()->hasRole(['admin', 'sadmin']))--}}

            {{--@endif--}}

            {{--@permission('manage-admins')--}}
            {{--<p>This is visible to users with the given permissions. Gets translated to--}}
                {{--\Entrust::can('manage-admins'). The   directive is already taken by core--}}
                {{--laravel authorization package, hence the  directive instead.</p>--}}
            {{--@endpermission--}}

            {{--@ability('admin ,owner', 'create-post,edit-user')--}}
            {{--<p>This is visible to users with the given abilities. Gets translated to--}}
                {{--\Entrust::ability('admin,owner', 'create-post,edit-user')</p>--}}
            {{--@endability--}}
        {{--@endif--}}
        <p class="text-muted">E-Learning v1.0 © Copyright 2016</p>
    </div>
</footer>

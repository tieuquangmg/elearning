<div class="modal fade" id="reView" tabindex="-1" role="dialog" aria-labelledby="reViewLabel">
    <div class="modal-dialog" role="document">
        <form method="post" action="{{route('ex.question.create')}}">
            <div class="modal-content modal-lg">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="reViewLabel">Xem</h4>
                </div>
                <div class="modal-body">
                    @include($prefix.'mini_test.making')
                </div>
            </div>
        </form>
    </div>
</div>
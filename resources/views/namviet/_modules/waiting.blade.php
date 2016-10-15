<div class="modal modal-static fade" id="processing-modal" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="text-center">
                    <img src="http://www.travislayne.com/images/loading.gif" class="icon" />
                    <h4>Processing... <button type="button" class="close" style="float: none;" data-dismiss="modal" aria-hidden="true">×</button></h4>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <h3>Centered Processing Modal <br /><small>Create a simpler, auto-centered modal to tell the user something is processing and block their input!</small></h3>
        <p><code>NOTE: The 'X' button in the modal is provided for testing purposes only, and can be removed to make the modal uninterruptable.</code></p>
        <br />

        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#processing-modal">
            <i class="glyphicon glyphicon-play"></i> Start Processing
        </button>
    </div>
</div>
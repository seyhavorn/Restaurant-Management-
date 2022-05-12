<form action="" method="POST" enctype="multiple/form-data" id="remove-list-image-modal">
    {{ method_field('delete') }}
    {{ csrf_field() }}
    <div class="modal fade" id="deleteListImage" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ __('Delete Image') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    You sure you want to delete this image? <b></b>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button class="btn btn-outline-danger">{{ __('Delete Image') }}</a> </button>
                </div>
            </div>
        </div>
    </div>
</form>

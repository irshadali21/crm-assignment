<form action="{{ route('employees.store') }}" data-method="post" data-ajax='true' enctype="multipart/form-data">
    <div class="modal-body" id="modal-body">
        <div class="card card-preview">
            <div class="card-inner">
                <div class="preview-block">
                    @include('employees.form')
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer bg-light" id="modal-footer"> <button type="submit" class="btn btn-success">Submit</button></div>
</form>

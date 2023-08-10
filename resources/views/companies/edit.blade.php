<form action="{{ route('companies.update', $company->id ) }}" data-method="POST" data-ajax=true enctype="multipart/form-data">
    {{ method_field('PUT') }}
    <div class="modal-body" id="modal-body">
        <div class="card card-preview">
            <div class="card-inner">
                <div class="preview-block">
                    @include('companies.form')
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer bg-light" id="modal-footer"> <button type="submit" class="btn btn-success">Submit</button></div>
</form>

<div class="card card-preview">
    <div class="card-inner">
        <div class="preview-block">
            <div class="row gy-4">
                <div class="col-sm-6">
                    <div class="form-group"><span class="form-label" >First Name</span>
                        <div class="form-control-title"><h4>{{ $employee->first_name }}</h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group"><span class="form-label" >Last Name</span>
                        <div class="form-control-title"><h5>{{ $employee->last_name }}</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group"><span class="form-label" >Phone</span>
                        <div class="form-control-title">
                            <h5>{{ $employee->phone }}</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group"><span class="form-label" >Email</span>
                        <div class="form-control-title">
                            <h5>{{ $employee->email }}</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group"><span class="form-label" >Company</span>
                        <div class="form-control-title">
                            <h5>{{ $employee->company->name }}</h5>
                        </div>
                    </div>
                </div>

        </div>
    </div>
</div>

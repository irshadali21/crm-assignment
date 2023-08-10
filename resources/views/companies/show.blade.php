<div class="card card-preview">
    <div class="card-inner">
        <div class="preview-block">
            <div class="row gy-4">
                <div class="col-sm-6">
                    <div class="form-group"><span class="form-label" >Name</span>
                        <div class="form-control-title"><h4>{{ $company->name }}</h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group"><span class="form-label" >Email</span>
                        <div class="form-control-title"><h5>{{ $company->email }}</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group"><span class="form-label" >Website</span>
                        <div class="form-control-title">
                            <h5>{{ $company->website }}</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group"><span class="form-label" >Logo</span>
                        <div class="form-control-title">
                            <img src="{{ @$company->logo ?  \Storage::url($company->logo) : asset('/images/dummy.png') }}" alt="logo" srcset="" width="100">
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>

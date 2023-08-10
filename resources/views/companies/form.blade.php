

            <div class="row gy-4">
                <div class="col-sm-6">
                    <div class="form-group"><label class="form-label" for="name">Name</label>
                        <div  class="form-control-wrap"><input  name="name" type="text" class="form-control" id="name" placeholder="Enter name"
                                value="{{ @$company->name }}">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group"><label class="form-label" for="name">Email</label>
                        <div class="form-control-wrap"><input name="email"  type="text" class="form-control" id="email" placeholder="Enter Email"
                                value="{{ @$company->email }}">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group"><label class="form-label" for="name">Website</label>
                        <div  class="form-control-wrap"><input name="website" type="text" class="form-control" id="website" placeholder="Enter Website"
                                value="{{ @$company->website }}">
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row gy-4">

                <div class="col-sm-6">
                    <div class="form-file">
                        <img src="{{ @$company->logo ?  \Storage::url($company->logo) : asset('/images/dummy.png') }}" alt="logo" width="100">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group"><label class="form-label" for="default-06">Default File Upload</label>
                        <div class="form-control-wrap">

                            <div class="form-file">
                                <input name="logo" type="file" multiple="" class="form-file-input" id="logo"><label class="form-file-label"
                                    for="logo">Choose file</label>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

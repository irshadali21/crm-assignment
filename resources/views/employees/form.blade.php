<div class="row gy-4">
    <div class="col-sm-6">
        <div class="form-group"><label class="form-label" for="name">First Name</label>
            <div class="form-control-wrap"><input name="first_name" type="text" class="form-control" id="first_name" placeholder="Enter First Name"
                    value="{{ @$employee->first_name }}">
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group"><label class="form-label" for="name">Last Name</label>
            <div class="form-control-wrap"><input name="last_name" type="text" class="form-control" id="last_name" placeholder="Enter Last Name"
                    value="{{ @$employee->last_name }}">
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group"><label class="form-label" for="name">Email</label>
            <div class="form-control-wrap"><input name="email" type="text" class="form-control" id="email" placeholder="Enter Email"
                    value="{{ @$employee->email }}">
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group"><label class="form-label" for="name">Phone</label>
            <div class="form-control-wrap"><input name="phone" type="text" class="form-control" id="phone" placeholder="Enter Phone"
                    value="{{ @$employee->phone }}">
            </div>
        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-group"><label class="form-label" for="name">Company</label>
            <div class="form-control-wrap">
                <select class="form-select js-select2"  data-search="on"  name="company_id">
                    @if ($companies)
                        @foreach ($companies as $company)
                            <option value="{{ $company->id }}" @if (@$employee) @if ($employee->id == $company->id) Selected @endif @endif>{{ $company->name }}</option>
                        @endforeach
                    @endif
                </select>

            </div>
        </div>
    </div>
</div>
<br>

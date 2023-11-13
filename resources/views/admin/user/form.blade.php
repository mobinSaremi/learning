<div class="container">
    <div class="">
        <div class="row m-0  w-100">
            <div class="col-6">
                <div class="fv-row fv-plugins-icon-container">
                    <label class="fs-6 fw-semibold form-label mt-3">
                        <span class="required">full name</span>
                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" aria-label="Enter the contact's name." data-kt-initialized="1"></i>
                    </label>
                    <input type="text" class="form-control form-control-solid" name="fullname" value="@if(isset($data)) {{@$data->fullname}}   @else {{@old('fullname')}} @endif" style="background:#dddddd ;">
                    <div class="fv-plugins-message-container invalid-feedback"></div>
                </div>
            </div>
            <div class="col-6">
                <div class="fv-row fv-plugins-icon-container">
                    <label class="fs-6 fw-semibold form-label mt-3">
                        <span class="required">email</span>
                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" aria-label="Enter the contact's name." data-kt-initialized="1"></i>
                    </label>
                    <input type="text" class="form-control form-control-solid" name="email" value="@if(isset($data)) {{@$data->email}}   @else {{@old('email')}} @endif" style="background:#dddddd ;">
                    <div class="fv-plugins-message-container invalid-feedback"></div>
                </div>
            </div>
            <div class="row m-0 w-100">
                <div class="col-6">
                    <div class="fv-row fv-plugins-icon-container">
                        <label class="fs-6 fw-semibold form-label mt-3">
                            <span class="required">password</span>
                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" aria-label="Enter the contact's name." data-kt-initialized="1"></i>
                        </label>
                        <input type="text" class="form-control form-control-solid" name="password" value="" style="background:#dddddd ;">
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                </div>
                <div class="  col-6  form-group mb-3 mt-6 ">
                <label class="required" for="example-select">access level</label>

                <select class="form-control" name="role_id" id="example-select" style="background-color: #dddddd;">
                    <option default value="0">please select an access level</option>
                    @foreach($roles as $role)
                    <option value=" {{$role->id}}" @if(isset($data) and $role->id == $data->role_id ) selected @endif> {{$role->title}}</option>
                    @endforeach
                </select>
            </div>
            </div>
        </div>
        <div class="d-flex ">
            <div class="">

                <div class="d-flex flex-column">
                    <div class="fs-6 fw-semibold text-dark">be an admin</div>
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <div class="form-check form-check-solid form-check-custom form-switch">
                    <input name="admin" class="form-check-input w-45px h-30px mx-2" type="checkbox" id="githubswitch" @if(@$data->admin == 1) checked @endif >
                    <label class="form-check-label" for="githubswitch"></label>
                </div>
            </div>
        </div>
        <br>
        <div class="save">
            <button class="btn btn-primary" type="submit" style="margin: 0 auto;display:flex">save</button>
        </div>

    </div>
</div>
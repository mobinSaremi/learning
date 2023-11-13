<div class="container">
    <div class="">
        <div class="row m-0  w-100">
            <div class="col-6">
                <div class="fv-row fv-plugins-icon-container">
                    <label class="fs-6 fw-semibold form-label mt-3">
                        <span class="required">title</span>
                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" aria-label="Enter the contact's name." data-kt-initialized="1"></i>
                    </label>
                    <input type="text" class="form-control form-control-solid" name="title" value="@if(isset($data)) {{@$data->title}}   @else {{@old('title')}} @endif" style="background:#dddddd ;">
                    <div class="fv-plugins-message-container invalid-feedback"></div>
                </div>
            </div>
            <div class="col-6">
                <div class="fv-row fv-plugins-icon-container">
                    <label class="fs-6 fw-semibold form-label mt-3">
                        <span class="required">price</span>
                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" aria-label="Enter the contact's name." data-kt-initialized="1"></i>
                    </label>
                    <input type="text" class="form-control form-control-solid" name="price" value="@if(isset($data)) {{@$data->price}}   @else {{@old('price')}} @endif" style="background:#dddddd ;">
                    <div class="fv-plugins-message-container invalid-feedback"></div>
                </div>
            </div>

        </div>

        <div class="row m-0  w-100">
            <div class="col-6 fv-row fv-plugins-icon-container">
                <label class="fs-12 fw-semibold form-label mt-3">
                    <span class="required">Seo title</span>
                    <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" aria-label="Enter the contact's name." data-kt-initialized="1"></i>
                </label>
                <input type="text" class="form-control form-control-solid" name="title_seo" value="@if(isset($data)) {{@$data->title_seo}}   @else {{@old('title_seo')}} @endif" style="background:#dddddd ;">
                <div class="fv-plugins-message-container invalid-feedback"></div>
            </div>
            <div class="col-6 fv-row fv-plugins-icon-container">
                <label class="fs-12 fw-semibold form-label mt-3">
                    <span class="required">Url address</span>
                    <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" aria-label="Enter the contact's name." data-kt-initialized="1"></i>
                </label>
                <input type="text" class="form-control form-control-solid" name="url" value="@if(isset($data)) {{@$data->url}}  @else {{@old('url')}}   @endif" style="background:#dddddd ;">
                <div class="fv-plugins-message-container invalid-feedback"></div>
            </div>
        </div>
        <div class="row m-0  w-100">
            <div class="col-6 fv-row mb-7">
                <label class="fs-6 fw-semibold form-label mt-3">
                    <span class="required">Seo description</span>
                    <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" aria-label="Enter any additional notes about the contact (optional)." data-kt-initialized="1"></i>
                </label>
                <textarea class="form-control " name="description_seo" style="background:#dddddd ;">@if(isset($data)) {{@$data->description_seo}}     @else {{@old('description_seo')}}       @endif</textarea>
            </div>
            <div class=" col-6  form-group mb-3 mt-6">
                <label class="required" for="example-select">category</label>
                <select class="form-control" id="example-select" name="category_id" style="background-color: #dddddd;">
                    <option default value=""> Please select a category</option>

                    @foreach($category as $cat)
                    <option value="{{$cat->id}}" @if(isset($data) and $cat->id == $data->category_id ) selected @endif>{{$cat->title}}</option>
                    @endforeach
                </select>
                <div class="fv-plugins-message-container invalid-feedback"></div>
            </div>
        </div>
        <div class="fv-row mb-7">
            <label class="fs-6 fw-semibold form-label mt-3">
                <span>description</span>
                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" aria-label="Enter any additional notes about the contact (optional)." data-kt-initialized="1"></i>
            </label>
            <textarea class="form-control ckeditor" name="description" style="background:#dddddd ;"> @if(isset($data)) {{@$data->description}}     @else {{@old('description')}}       @endif</textarea>
        </div>
        <div class="form-group mb-3">
            <label for="example-fileinput">Select photo</label>
            <img src="{{asset('assets/upload/'.@$data->image)}}" alt="" style="width: 300px;height:160px">
            <input type="file" name="image" id="example-fileinput" class="form-control-file">
        </div>
        <div class="d-flex ">
            <div class="">

                <div class="d-flex flex-column">
                    <div class="fs-6 fw-semibold text-dark">show</div>
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <div class="form-check form-check-solid form-check-custom form-switch">
                    <input name="status" class="form-check-input w-45px h-30px mx-2" type="checkbox" id="githubswitch" @if(@$data->status == 1) checked @endif >
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
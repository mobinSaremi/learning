<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
    <div class="box-body">
        <div class="form-group">
            <div class="row w-100  m-0">
                <div class="col-md-6">
                    <label>title:</label>
                    <input class="form-control" type="text" id="name" name="title" value="" placeholder="    Enter the title . . .">
                </div>
            
                <!-- <div class="col-md-6" style="margin-top: 25px;">
                    <input type="checkbox" name="select_all" value="1" id="select_all">
                    <span class="text"></span>
                </div> -->
            </div>
        </div>

        <hr>
        <div class="form-group">
            <div class="row w-100 m-0">
                <?php
                if (isset($data->permission)) {
                    $accessDB = unserialize($data->permission) ? unserialize($data->permission) : [];
                } else {
                    $accessDB = [];
                }
                ?>
                @foreach(Config::get('site.permisions') as $key=>$value)
                @if($key !== "index")
                <div class="widget col-md-4 p-2">
                    <div class="card bg-light rounded-lg p-3 h-100 border-0">
                        <div class="widget-header bordered-bottom bordered-themesecondary">
                            <i class="widget-icon fa fa-unlock-alt themesecondary"></i>
                            <span class="widget-caption themesecondary" style="color: #3c8dbc;">{{{ $value['title'] }}}</span>
                        </div>
                        <!--Widget Header-->
                        <div class="widget-body">
                            <div class="widget-main no-padding">
                                <div class="tickets-container" style="height: 150px;">
                                    @foreach(@$value['access'] as $keyAccess => $access)

                                    <div class="col-md-6">
                                        @php $permission = 'admin.'.$key.'.'.$keyAccess; @endphp
                                        <input type="checkbox" name="access[]" value="{{$permission}}" @if(isset($data) && in_array($permission,$accessDB)) checked @endif>
                                        <span class="text">{{{ $access }}}</span>
                                    </div>
                                    @endforeach
                                    <br />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @else
                <div class="widget col-md-4 p-2">
                    <div class="card bg-light rounded-lg p-3 h-100 border-0">
                        <div class="widget col-md-12" style="background-color: rgb(248, 248, 248); border: medium solid;">
                            <div class="widget-header bordered-bottom bordered-themesecondary">
                                <i class="widget-icon fa fa-unlock-alt themesecondary"></i>
                                <span class="widget-caption themesecondary" style="color: #3c8dbc;">{{{ $value['title'] }}}</span>
                            </div>
                            @php $permission = 'admin.index'; @endphp
                            <input type="checkbox" name="access[]" value="{{$permission}}" @if(isset($data) && in_array($permission,$accessDB)) checked @endif>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>
        <div class="save">
            <button class="btn btn-primary" type="submit" style="margin: 0 auto;display:flex">save</button>
        </div>
    </div>
</div>
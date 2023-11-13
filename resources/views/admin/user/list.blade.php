@extends('layouts.admin.master')
@section('content')
@section('title')
Admin list
@stop
<div class="container p-2">
    <div class="card mb-5 mb-xl-8">
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bold fs-3 mb-1">Admin table</span>
            </h3>
            <div class="card-toolbar">
                <a href="{{route('admin.user.list.add')}}" class="btn btn-sm btn-light-primary">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                    <span class="svg-icon svg-icon-2">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor"></rect>
                            <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor"></rect>
                        </svg>
                    </span>
                    <!--end::Svg Icon-->Add admin
                </a>
            </div>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body py-3">
            <!--begin::Table container-->
            <div class="table-responsive">
                <!--begin::Table-->
                <table class="table align-middle gs-0 gy-4">
                    <!--begin::Table head-->
                    <thead>
                        <tr class="fw-bold text-muted bg-light">
                            <th>num</th>
                            <th>name</th>
                            <th>email</th>
                            <th>status</th>
                            <th>operations</th>

                        </tr>
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->fullname}}</td>
                            <td>
                                {{$user->email}}
                            </td>
                            <td>
                                @if($user->admin == 1) <label class="text-success" for="">active</label> @else <label class="text-danger" for="">Inactive</label> @endif
                            </td>
                            <td class="d-flex  align-items-center">
                                <a class="btn btn-info mx-1" href="{{route('admin.user.list.edit',['id'=>$user->id])}}" style="width: 100px;">edit</a>
                                <a class="btn btn-danger mx-1"  onclick="return confirm('Are you sure you want to delete the information?');" href="{{route('admin.user.list.delete',['id'=>$user->id])}}" style="width: 100px;">delete</a>
                              
                            </td>
                        </tr>
                        @endforeach()
                        <tr>


                        </tr>
                    </tbody>
                    <!--end::Table body-->
                </table>
                <!--end::Table-->
            </div>
            <!--end::Table container-->
        </div>
        <!--begin::Body-->

    </div>
</div>

@stop
@extends('layout.adminLayout')
@section('title')
    {{__('cp.contents_management')}}
@endsection
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Subheader-->
        <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
            <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                <!--begin::Info-->
                <div class="d-flex align-items-center flex-wrap mr-1">
                    <div class="d-flex align-items-baseline mr-5">
                        <h3>{{__('cp.add_content')}}</h3>
                    </div>
                </div>
                <!--end::Info-->
                <!--begin::Toolbar-->
                <div class="d-flex align-items-center">
                    <a href="{{route('admin.contents.index')}}"
                       class="btn btn-secondary  mr-2">{{__('cp.cancel')}}</a>
                    <button id="submitButton" class="btn btn-success ">{{__('cp.save')}}</button>
                </div>
                <!--end::Toolbar-->
            </div>
        </div>
        <!--end::Subheader-->
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
                <!--begin::Card-->
                <div class="card card-custom gutter-b example example-compact">
                    <form class="form" method="post" action="{{route('admin.contents.store')}}"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{__('cp.title')}} <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control form-control-solid"
                                               name="title"
                                               value="{{ old('title', @$item->title)}}" required/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{__('cp.content')}} <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control form-control-solid"
                                               name="content"
                                               value="{{ old('content', @$item->content)}}" required/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{__('cp.description')}} <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control form-control-solid"
                                               name="description"
                                               value="{{ old('description', @$item->description)}}" required/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{__('cp.category')}} <span class="text-danger">*</span></label>
                                        <select name="category_id" class="form-control">
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}" >
                                                    {{$category->title}}
                                                </option>
                                            @endforeach
                                        </select></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{__('cp.keyword')}} <span class="text-danger">*</span></label>
                                        <select name="keyword_id" class="form-control">
                                            @foreach($keywords as $keyword)
                                                <option value="{{$keyword->id}}" >
                                                    {{$keyword->title}}
                                                </option>
                                            @endforeach
                                        </select></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{__('cp.image')}} <span class="text-danger">*</span></label>
                                    <input name="image" type="file" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" id="submitForm" style="display:none"></button>
                    </form>
                </div>
                <!--end::Card-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
@endsection

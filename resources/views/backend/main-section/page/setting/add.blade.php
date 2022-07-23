@extends('backend.main-section.body.main')
@section('main')

                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="components-preview wide-md mx-auto">
                                    <div class="nk-block nk-block-lg">
                                        <div class="card card-bordered">
                                            <div class="card-inner">
                                                <div class="card-head">
                                                    <h5 class="card-title">Site Settings</h5>
                                                </div>
                                                <form action="{{route('setting.update')}}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row g-4">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label class="form-label">Title (Forntend)</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="title" name="title" value="{{$settings->title}}" class="form-control" placeholder="Enter Forntend Name">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label class="form-label">Title (Backend)</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="title" name="title1" value="{{$settings->title1}}" class="form-control" placeholder="Enter Backend Title">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label class="form-label">Name (Forntend)</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" name="name" value="{{$settings->name}}" class="form-control" placeholder="Enter Forntend Name">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label class="form-label">Name (Backend)</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" name="name1" value="{{$settings->name1}}" class="form-control" placeholder="Enter Backend Name">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label class="form-label" for="pay-amount-1">Backend Logo</label>
                                                                <div class="form-file">
                                                                    <input type="file" name="image" class="form-file-input" id="customFile">
                                                                    <label class="form-file-label" for="customFile">Choose file</label>
                                                                </div>
                                                            </div> 
                                                        </div>
                                                        <div class="col-12" align="right">
                                                            <div class="form-group">
                                                                <button type="submit" class="btn btn-lg btn-primary">Save</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div><!-- .nk-block -->
                                </div><!-- .components-preview -->
                            </div>
                        </div>
                    </div>
                </div>

@endsection
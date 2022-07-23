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
                                                    <h5 class="card-title">Social Site</h5>
                                                </div>
                                                <form action="{{route('social.update')}}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row g-4">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label class="form-label">Facebook Id</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" name="facebook" value="{{$socials->facebook}}" class="form-control" placeholder="sm.sohag007">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label class="form-label">Twitter Id</label>
                                                                <div class="form-control-wrap">
                                                                <input type="text" name="twitter" value="{{$socials->twitter}}" class="form-control" placeholder="/sm.sohag007">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label class="form-label">GitHub Id</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" name="github" value="{{$socials->github}}" class="form-control" placeholder="/sm.sohag007">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label class="form-label">Whatsapp Id</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" name="whatsapp" value="{{$socials->whatsapp}}" class="form-control" placeholder="/01611100752">
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
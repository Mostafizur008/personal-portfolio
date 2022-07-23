@extends('backend.main-section.body.main')
@section('main')

<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block nk-block-lg">
                    <div class="row g-gs">
                        <div class="col-sm-6 col-lg-2 col-xxl-3">
                        </div><!-- .col -->
                        <div class="col-lg-8">
                            <div class="card card-bordered h-100">
                                <div class="card-inner">
                                    <div class="card-head">
                                    </div>
                                    <form action="{{route('user.change.password.update')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                    <div class="row g-4">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="focus-label">Old Password</label>
                                                <input  type="password" id="current_password" class="form-control" name="oldpassword">
                                            </div>
                                            @error ('oldpassword')
                                            <span class = "text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="focus-label">Password</label>
                                                <input  type="password" id="password" class="form-control" name="password">
                                            </div>
                                            @error ('password')
                                                <span class = "text-danger">{{$message}}</span>
                                                @enderror
                                        </div>
        
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="focus-label">Confirm Password</label>
                                                
                                                <input  type="password" id="password_confirmation" class="form-control" name="password_confirmation">
                                            </div>
                                            @error ('password_confirmation')
                                                <span class = "text-danger">{{$message}}</span>
                                                @enderror
                                        </div>
                                        <div class="col-md-12" align="right">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-lg btn-primary">UPDATE PASSWORD</button>
                                        </div>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-2 col-xxl-3">
                        </div><!-- .col -->
                    </div>
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>

@endsection
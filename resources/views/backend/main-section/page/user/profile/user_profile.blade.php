@extends('backend.main-section.body.main')
@section('main')

<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block nk-block-lg">
                    <div class="row g-gs">
                        <div class="col-sm-6 col-lg-3 col-xxl-3">
                        </div><!-- .col -->
                        <div class="col-sm-6 col-lg-6 col-xxl-3">
                            <div class="card card-bordered">
                                <div class="card-inner">
                                    <div class="team">
                                        <div class="user-card user-card-s2">
                                            <div class="user-avatar lg bg-primary">
                                                <img src="{{ (!empty($user->image)) ? url('backend/all-images/database/user/'.$user->image): url('backend/all-images/database/default/mps.gif') }}" alt="">
                                            </div>
                                            <div class="user-info">
                                                <h6>{{$user->name}}</h6>
                                            </div>
                                        </div>
                                        <ul class="team-info">
                                            <li><span>First Name</span><span>{{$user->first_name}}</span></li>
                                            <li><span>Last Name</span><span>{{$user->last_name}}</span></li>
                                            <li><span>Gender</span><span>{{$user->gender}}</span></li>
                                            <li><span>Contact</span><span>+88 {{$user->mobile}}</span></li>
                                            <li><span>Email</span><span>{{$user->email}}</span></li>
                                        </ul>
                                        <div class="team-view">
                                            <button class="btn btn-block btn-dim btn-primary" data-bs-toggle="modal" data-bs-target="#profile"><span>Edit Profile</span></button>
                                        </div>
                                    </div><!-- .team -->
                                </div><!-- .card-inner -->
                            </div><!-- .card -->
                        </div><!-- .col -->
                        <div class="col-sm-6 col-lg-3 col-xxl-3">
                        </div><!-- .col -->
                    </div>
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>

<div class="modal fade" role="dialog" id="profile">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
            <div class="modal-body modal-body-lg">
                <h5 class="title">Update Profile</h5>
                <form action="{{route('user.profile.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="tab-content">
                    <div class="tab-pane active" id="personal">
                        <div class="row gy-4">
                            <div class="col-md-12" align="center">
                            <div class="user-avatar sq lg">
                                <img id="showImage" src="{{ (!empty($user->image)) ? url('backend/all-images/database/user/'.$user->image): url('backend/all-images/database/default/mps.gif') }}" alt="">
                                <input class="status dot dot-xxl dot-success" type="file" name="image" id="image">
                            </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="full-name">First Name</label>
                                    <input type="first_name" name="first_name" id="first_name" class="form-control form-control-lg" value="{{$user->first_name}}" placeholder="First name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="display-name">Last Name</label>
                                    <input type="last_name" name="last_name" id="last_name" class="form-control form-control-lg" value="{{$user->last_name}}" placeholder="Last name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="display-name">Full Name</label>
                                    <input type="name" name="name" id="name" class="form-control form-control-lg" value="{{$user->name}}" placeholder="Username">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="phone-no">Phone Number</label>
                                    <input type="mobile" id="edit_mobile" name="mobile" value="{{$user->mobile}}" class="form-control form-control-lg"  placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="birth-day">Gender</label>
                                    <select name="gender" id="gender" class="form-control form-control-lg  form-select" data-placeholder="Choose one">
                                        <option value="Male" {{ ($user->gender == "Male" )? "selected": ""}}>Male</option>
                                        <option value="Female" {{ ($user->gender == "Female" )? "selected": ""}}>Female</option>
                                        <option value="Others" {{ ($user->gender == "Others" )? "selected": ""}}>Others</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="email">Email</label>
                                    <input type="email" id="email" name="email" value="{{$user->email}}" class="form-control form-control-lg"  placeholder="Email">
                                </div>
                            </div>
                            <div class="col-12" align="right">
                                <ul class="align-right">
                                    <li>
                                        <button type="submite" class="btn btn-lg btn-primary" data-bs-dismiss="modal">Update Profile</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </form>
                    </div><!-- .tab-pane -->
                </div><!-- .tab-content -->
            </div><!-- .modal-body -->
        </div><!-- .modal-content -->
    </div><!-- .modal-dialog -->
</div><!-- .modal -->

<script type="text/javascript">
    $(document).ready(function () {
    $('#image').change(function(e){
    var reader = new FileReader();
    reader.onload = function(e){
    $('#showImage').attr('src',e.target.result);
    }
    reader.readAsDataURL(e.target.files['0']);
    });
    });
    </script>

@endsection
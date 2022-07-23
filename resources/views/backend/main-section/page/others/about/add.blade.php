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
                                                    <h5 class="card-title">About Us</h5>
                                                </div>
                                                <form action="{{route('about.update')}}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row g-4">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label class="form-label">Full Name</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="name" name="name" value="{{$abouts->name}}" class="form-control" placeholder="Full Name">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label class="form-label">Father's Name</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="fname" name="fname" value="{{$abouts->fname}}" class="form-control" placeholder="Father's Name">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label class="form-label">Mother's Name</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="mname" name="mname" value="{{$abouts->mname}}" class="form-control" placeholder="Mother's Name">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label class="form-label">Sex</label>
                                                                <div class="form-control-wrap ">
                                                                    <select class="form-select js-select2" name="gender" data-placeholder="Select a option" required>
                                                                        <option label="empty" value=""></option>
                                                                        <option value="Male" {{ ($abouts->gender == "Male" )? "selected": ""}}>Male</option>
                                                                        <option value="Female" {{ ($abouts->gender == "Female" )? "selected": ""}}>Female</option>
                                                                        <option value="Others" {{ ($abouts->gender == "Others" )? "selected": ""}}>Others</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label class="form-label">Birth Of date</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-left">
                                                                        <em class="icon ni ni-calendar"></em>
                                                                    </div>
                                                                    <input type="dob" name="dob" value="{{$abouts->dob}}" class="form-control date-picker" data-date-format="yyyy-mm-dd">
                                                                </div>
                                                                <div class="form-note">Date format <code>yyyy-mm-dd</code></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label class="form-label">Mobile</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="mobile" name="mobile" value="{{$abouts->mobile}}" class="form-control" placeholder="Mobile No">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label class="form-label">Religion</label>
                                                                <div class="form-control-wrap ">
                                                                    <select class="form-select js-select2" name="religion" data-placeholder="Select a option" required>
                                                                        <option label="empty" value=""></option>
                                                                        <option value="Islam" {{ ($abouts->religion == "Islam" )? "selected": ""}}>Islam</option>
                                                                        <option value="Hindhu" {{ ($abouts->religion == "Hindhu" )? "selected": ""}}>Hindhu</option>
                                                                        <option value="Chistan" {{ ($abouts->religion == "Chistan" )? "selected": ""}}>Chistan</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label class="form-label">Blood</label>
                                                                <div class="form-control-wrap ">
                                                                    <select class="form-select js-select2" name="blood" data-placeholder="Select a option" required>
                                                                        <option label="empty" value=""></option>
                                                                        <option value="A+" {{ ($abouts->blood == "A+" )? "selected": ""}}>A+</option>
                                                                        <option value="A-" {{ ($abouts->blood == "A-" )? "selected": ""}}>A-</option>
                                                                        <option value="B+" {{ ($abouts->blood == "B+" )? "selected": ""}}>B+</option>
                                                                        <option value="B-" {{ ($abouts->blood == "B-" )? "selected": ""}}>B-</option>
                                                                        <option value="O+" {{ ($abouts->blood == "O+" )? "selected": ""}}>O+</option>
                                                                        <option value="O-" {{ ($abouts->blood == "O-" )? "selected": ""}}>O-</option>
                                                                        <option value="AB+" {{ ($abouts->blood == "AB+" )? "selected": ""}}>AB+</option>
                                                                        <option value="AB-" {{ ($abouts->blood == "AB-" )? "selected": ""}}>AB-</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label class="form-label">Pressent Address</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="pe_address" name="pe_address" value="{{$abouts->pe_address}}" class="form-control" placeholder="Pressent Address">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label class="form-label">Permanent Address</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="per_address" name="per_address" value="{{$abouts->per_address}}" class="form-control" placeholder="Permanent Address">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label class="form-label">Marital Status</label>
                                                                <div class="form-control-wrap ">
                                                                    <select class="form-select js-select2" name="m_status" data-placeholder="Select a option" required>
                                                                        <option label="empty" value=""></option>
                                                                        <option value="Singal" {{ ($abouts->m_status == "Singal" )? "selected": ""}}>Singal</option>
                                                                        <option value="Marride" {{ ($abouts->m_status == "Marride" )? "selected": ""}}>Marride</option>
                                                                        <option value="Devorce" {{ ($abouts->m_status == "Devorce" )? "selected": ""}}>Devorce</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label class="form-label">Nationality</label>
                                                                <div class="form-control-wrap ">
                                                                    <select class="form-select js-select2" name="nationality" data-placeholder="Select a option" required>
                                                                        <option label="empty" value=""></option>
                                                                        <option value="Bangladeshi" {{ ($abouts->nationality == "Bangladeshi" )? "selected": ""}}>Bangladeshi</option>
                                                                        <option value="Indian" {{ ($abouts->nationality == "Indian" )? "selected": ""}}>Indian</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label class="form-label">Email</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="email" name="email" value="{{$abouts->email}}" class="form-control" placeholder="Email">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label class="form-label" for="pay-amount-1">Cover Image</label>
                                                                <div class="form-file">
                                                                    <input type="file" name="photo" class="form-file-input" id="customFile">
                                                                    <label class="form-file-label" for="customFile">Choose file</label>
                                                                </div>
                                                            </div> 
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label class="form-label" for="pay-amount-1">About Us</label>
                                                                <div class="form-control-wrap">
                                                                    <textarea type="text" name="about" value="{{$abouts->about}}" class="form-control" placeholder="Written....................."></textarea>
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
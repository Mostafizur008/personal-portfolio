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
                                                    <h5 class="card-title">Experiance Here</h5>
                                                </div>
                                                <form action="{{route('resume.store')}}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row g-4">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label class="form-label">Company Name</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="company" name="company"  class="form-control" placeholder="Compnay Name">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label class="form-label">Designation</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="designation" name="designation" class="form-control" placeholder="Designation">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label class="form-label">Address</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="address" name="address" class="form-control" placeholder="Addrerss">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-5">
                                                            <div class="form-group">
                                                                <label class="form-label">Start Date</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-left">
                                                                        <em class="icon ni ni-calendar"></em>
                                                                    </div>
                                                                    <input type="sdate" name="sdate" class="form-control date-picker">
                                                                </div>
                                                                <div class="form-note">Date format <code>yyyy-mm-dd</code></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-5">
                                                            <div class="form-group">
                                                                <label class="form-label">End Date</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-left">
                                                                        <em class="icon ni ni-calendar"></em>
                                                                    </div>
                                                                    <input type="edate" name="edate" class="form-control date-picker">
                                                                </div>
                                                                <div class="form-note">Date format <code>yyyy-mm-dd</code></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <div class="form-group">
                                                                <label class="form-label"><br></label>
                                                                <div class="form-control-wrap">
                                                                    <div class="custom-control custom-control-lg custom-checkbox">
                                                                        <input type="checkbox" class="custom-control-input" value="Present" name="status" id="status">
                                                                        <label class="custom-control-label" for="status">Present</label>
                                                                    </div>
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
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
                                                    <h5 class="card-title">Education Here</h5>
                                                </div>
                                                <form action="{{route('ed.update',$rs->id)}}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row g-4">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label class="form-label">Type</label>
                                                                <div class="form-control-wrap">
                                                                    <select name="type"  class="form-select js-select2" data-placeholder="Select a option" required>
                                                                        <option value="SSC">SSC</option>
                                                                        <option value="HSc">HSc</option>
                                                                        <option value="Graduation">Graduation</option>
                                                                        <option value="Post Graduaction">Post Graduaction</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label class="form-label">Institution</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="name" name="name" value="{{$rs->name}}" class="form-control" placeholder="Institution">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label class="form-label">Address</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="description" name="description" value="{{$rs->description}}" class="form-control" placeholder="Addrerss">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label class="form-label">Start Date</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-left">
                                                                        <em class="icon ni ni-calendar"></em>
                                                                    </div>
                                                                    <input type="sdate" name="sdate" value="{{$rs->sdate}}" class="form-control date-picker">
                                                                </div>
                                                                <div class="form-note">Date format <code>yyyy-mm-dd</code></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label class="form-label">Grade Point</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="point" name="point" value="{{$rs->point}}" class="form-control" placeholder="Example : GPA or CGPA - 5.0">
                                                                </div>
                                                                <div class="form-note">Typing Formate : <code>GPA - 5.00</code></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12" align="right">
                                                            <div class="form-group">
                                                                <button type="submit" class="btn btn-lg btn-primary">UPDATE</button>
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
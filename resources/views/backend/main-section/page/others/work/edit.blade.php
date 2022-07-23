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
                                                    <h5 class="card-title">Project Here</h5>
                                                </div>
                                                <form action="{{route('work.update',$wk->id)}}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row g-4">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label class="form-label">Project Name</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="project" name="project" value="{{$wk->project}}"  class="form-control" placeholder="Project Name">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label class="form-label">Link</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="link" name="link" value="{{$wk->link}}" class="form-control" placeholder="Link">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label class="form-label">Description</label>
                                                                <div class="form-control-wrap">
                                                                    <textarea type="description" name="description" value="{{$wk->description}}" class="form-control">Hello, World!</textarea>
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
                                                                    <input type="sdate" name="sdate" value="{{$wk->sdate}}" class="form-control date-picker">
                                                                </div>
                                                                <div class="form-note">Date format <code>yyyy-mm-dd</code></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label class="form-label">End Date</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-left">
                                                                        <em class="icon ni ni-calendar"></em>
                                                                    </div>
                                                                    <input type="edate" name="edate" value="{{$wk->edate}}" class="form-control date-picker">
                                                                </div>
                                                                <div class="form-note">Date format <code>yyyy-mm-dd</code></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label class="form-label">Author Name</label>
                                                                <div class="form-control-wrap ">
                                                                    <select class="form-select js-select2" name="about_id" data-placeholder="Select a option" required>
                                                                        
                                                                        @foreach ($about as $ab)
                                                                        <option value="{{$ab->id}} {{ ($ab->about_id == $ab->id)? "selected":"" }}">{{$ab->name}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label class="form-label" for="pay-amount-1">Thumbnail</label>
                                                                <div class="form-file">
                                                                    <input type="file" name="image" value="{{$wk->image}}" class="form-file-input" id="customFile">
                                                                    <label class="form-file-label" for="customFile">Choose file</label>
                                                                </div>
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
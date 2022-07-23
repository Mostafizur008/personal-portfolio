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
                                                </div>
                                                <form action="{{route('sk.update',$sk->id)}}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row g-3">
                                                        <h6>CODING SKILLS</h6>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label class="form-label">Name</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="name" name="name" value="{{$sk->name}}" class="form-control" placeholder="Skill Name">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label class="form-label">Parsent</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="parsent" name="parsent" value="{{$sk->parsent}}" class="form-control" placeholder="Parsent">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><br/><br/>
                                                    <div class="row g-3">
                                                        <h6>DESIGN SKILLS</h6>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label class="form-label">Name</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="dname" name="dname" value="{{$sk->dname}}" class="form-control" placeholder="Skill Name">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label class="form-label">Parsent</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="dparsent" name="dparsent" value="{{$sk->dparsent}}" class="form-control" placeholder="Parsent">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br/><br/>
                                                    <div class="row g-3">
                                                        <h6>LANGUAGE SKILLS</h6>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label class="form-label">Name</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="lname" name="lname" value="{{$sk->lname}}" class="form-control" placeholder="Skill Name">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label class="form-label">Parsent</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="lparsent" name="lparsent" value="{{$sk->lparsent}}" class="form-control" placeholder="Parsent">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><br/><br/>
                                                    <div class="row g-3">
                                                        <h6>BASIC KNOWLEDGE</h6>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label class="form-label">Name</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="bname" name="bname" value="{{$sk->bname}}" class="form-control" placeholder="Skill Name">
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

    <script type="text/javascript">
        $(document).on('change','#mbs',function(){
        var mbs = $(this).val();
          if(mbs == 'Graduaction'){
            $('.graduaction').show();
          }else{
            $('.graduaction').hide();
          }
        });
    </script>

@endsection
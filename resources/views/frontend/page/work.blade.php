<div class="card-wrap">

    <!--
        Works
    -->
    <div class="content works">

        <!-- title -->
        <div class="title">My Projects</div>

        <!-- content -->
        <div class="row grid-items border-line-v">

            @foreach ($allWork as $wk)
            <div class="col col-d-6 col-t-6 col-m-12 grid-item design border-line-h">
                <div class="box-item">
                    <div class="image">
                        <a href="#{{$wk->id}}" class="has-popup-media">
                            <img src="{{ (!empty($wk->image))? url('backend/all-images/database/work/'.$wk->image):url('upload/no_image.jpg') }}" alt="" />
                            <span class="info">
                                <span class="ion ion-images"></span>
                            </span>
                        </a>
                    </div>
                    <div class="desc">
                        <div class="name has-popup-media">{{$wk->project}}</div>
                    </div>

                    <div id="{{$wk->id}}" class="popup-box mfp-fade mfp-hide">
                        <div class="content">
                            <div class="image">
                                <img src="{{ (!empty($wk->image))? url('backend/all-images/database/work/'.$wk->image):url('upload/no_image.jpg') }}" alt="">
                            </div>
                            <div class="desc">
                                <div class="form-row">
                                <div class="col-lg-6">
                                    <p>Project Druation : {{date('d-m-Y',strtotime($wk->sdate))}} - {{date('d-m-Y',strtotime($wk->edate))}} &nbsp; &nbsp; &nbsp; &nbsp; Author Name : {{$wk->about_id}}</p>
                                </div>
                                <div class="col-lg-6">
                                    <p></p>
                                </div>
                            </div>
                            </div>
                            <div class="desc">
                                <div class="post-box">
                                    <h1>{{$wk->project}}</h1>
                                    <div class="blog-content">
                                       {{$wk->description}}
                                    </div>
                                </div><br/>
                                <a href="https://{{$wk->link}}" target="_blank" class="btn btn-primary"><span class="text">View Project</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="clear"></div>
        </div>

    </div>

</div>
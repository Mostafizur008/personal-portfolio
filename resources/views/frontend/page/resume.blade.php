<div class="card-wrap">

    <!--
        Resume
    -->
    <div class="content resume">

        <!-- title -->
        <div class="title">Resume</div>

        <!-- content -->
        <div class="row">

            <!-- experience -->
            <div class="col col-d-6 col-t-6 col-m-12 border-line-v">
                <div class="resume-title border-line-h">
                    <div class="icon"><i class="fa fa-briefcase"></i></div>
                    <div class="name">Experience</div>
                </div>
                <div class="resume-items">
                    @foreach ($allData as $rs)
                    <div class="resume-item border-line-h active">
                        <div class="date">{{date('d-m-Y',strtotime($rs->sdate))}} - {{$rs->edate}}{{$rs->status}}</div>
                        <div class="name">{{$rs->designation}}</div>
                        <div class="company">{{$rs->company}}</div>
                        <p>
                            {{$rs->address}}
                        </p>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- education -->
            <div class="col col-d-6 col-t-6 col-m-12 border-line-v">
                <div class="resume-title border-line-h">
                    <div class="icon"><i class="fa fa-university"></i></div>
                    <div class="name">Education</div>
                </div>
                <div class="resume-items">
                    @foreach ($ed as $rs)
                    <div class="resume-item border-line-h active">
                        <div class="date">{{$rs->sdate}}</div> - <div class="date">{{$rs->point}}</div>
                        <div class="name">{{$rs->type}}</div>
                        <div class="company">{{$rs->name}}</div>
                        <p>
                            {{$rs->description}}
                        </p>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="clear"></div>
        </div>

    </div>

    <!--
        Skills
    -->
    <div class="content skills">

        <!-- title -->
        <div class="title">My Skills</div>
    
        <!-- content -->
        <div class="row">
        
            <!-- skill item -->
            <div class="col col-d-6 col-t-6 col-m-12 border-line-v">
                <div class="skills-list circles">
                    <div class="skill-title border-line-h">
                        <div class="icon"><i class="fa fa-code"></i></div>
                        <div class="name">Coding</div>
                    </div>
                    <ul>
                        @foreach ($cd as $rs)
                        <li> 
                            <div class="name">{{$rs->name}}</div>
                            <div class="progress p{{$rs->parsent}}">
                                <span>{{$rs->parsent}}%</span>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="col col-d-6 col-t-6 col-m-12 border-line-v">
                <div class="skills-list">
                    <div class="skill-title border-line-h">
                        <div class="icon"><i class="fa fa-paint-brush"></i></div>
                        <div class="name">Design</div>
                    </div>
                    <ul>
                        @foreach ($dg as $rs)
                        <li class="border-line-h"> 
                            <div class="name">{{$rs->dname}}</div>
                            <div class="progress">
                                <div class="percentage" style="width:{{$rs->dparsent}}%;"></div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <!-- skill item -->


            <!-- skill item -->
            <div class="col col-d-6 col-t-6 col-m-12 border-line-v">
                <div class="skills-list list">
                    <div class="skill-title border-line-h">
                        <div class="icon"><i class="fa fa-list"></i></div>
                        <div class="name">Knowledge</div>
                    </div>
                    @foreach ($bk as $rs)
                    <ul>
                        <li> 
                            <div class="name">{{$rs->bname}}</div>
                        </li>
                    </ul>
                    @endforeach
                </div>
            </div>

            <div class="col col-d-6 col-t-6 col-m-12 border-line-v">
                <div class="skills-list dotted">
                    <div class="skill-title border-line-h">
                        <div class="icon"><i class="fa fa-flag"></i></div>
                        <div class="name">Languages</div>
                    </div>
                    @foreach ($lg as $rs)
                    <ul>
                        <li class="border-line-h"> 
                            <div class="name">{{$rs->lname}}</div>
                            <div class="progress">
                                <div class="percentage" style="width:{{$rs->lparsent}}%;"></div>
                            </div>
                        </li>
                    </ul>
                    @endforeach
                </div>
            </div>
            
            <div class="clear"></div>
        </div>
        
    </div>
</div>
<div class="card-wrap">

    @php
    $about = DB::table('abouts')->first();  
    @endphp
    <!-- 
        About 
    -->
    <div class="content about">

        <!-- title -->
        <div class="title">About Me</div>

        <!-- content -->
        <div class="row">
            <div class="col col-d-12 col-t-12 col-m-12 border-line-v">
                <div class="text-box">
                    <p>
                        {{$about->about}}
                    </p>
                </div>
            </div>
            <div class="clear"></div>
        </div>

    </div>

    <!--
        Services
    -->
    <div class="content services">

        <!-- title -->
        <div class="title">Personal Information</div>

        <!-- content -->
        <div class="row service-items border-line-v">
            <div class="col col-d-12 col-t-6 col-m-12 border-line-v">
                <div class="info-list">
                    <ul>
                        <li><strong>Name</strong> {{$about->name}}</li>
                        <li><strong>Father's Name</strong> {{$about->fname}}</li>
                        <li><strong>Mother's Name</strong> {{$about->mname}}</li>
                        <li><strong>Gender</strong> {{$about->gender}}</li>
                        <li><strong>Birth Of Date</strong> {{date('d-m-Y',strtotime($about->dob))}}</li>
                        <li><strong>Mobile</strong> {{$about->mobile}}</li>
                        <li><strong>Nationality</strong> {{$about->nationality}}</li>
                        <li><strong>Pressent Address</strong> {{$about->pe_address}}</li>
                        <li><strong>Permanent Address</strong> {{$about->per_address}}</li>
                        <li><strong>Marital Status</strong> {{$about->m_status}}</li>
                        <li><strong>Religion</strong> {{$about->religion}}</li>
                        <li><strong>Blood Group</strong> {{$about->blood}}</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="clear"></div>

    </div>

</div>
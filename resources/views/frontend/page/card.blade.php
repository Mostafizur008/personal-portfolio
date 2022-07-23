<div class="profile no-photo">

    @php
    $about = DB::table('abouts')->first();
    $social = DB::table('socials')->first();   
    @endphp

    <!-- profile image -->
    <div class="slide" style="background-image:"><img src="{{ (!empty($about->photo))? url('backend/all-images/database/user/'.$about->photo):url('upload/no_image.jpg') }}" alt="" /></div>

    <!-- profile titles -->
    <div class="title"><h3>{{$about->name}}</h3></div>
    <!--<div class="subtitle">Web Designer</div>-->
    <div class="subtitle subtitle-typed">
        <div class="typing-title">
            <p>Web Designer</p>
            <p>Developer</p>
            <p>Freelancer</p>
        </div>
    </div>

    <!-- profile socials -->
    <div class="social">
        <a target="_blank" href="https://facebook.com/{{$social->facebook}}"><span class="fa fa-facebook"></span></a>
        <a target="_blank" href="https://twitter.com/{{$social->twitter}}"><span class="fa fa-twitter"></span></a>
        <a target="_blank" href="https://github.com/{{$social->github}}"><span class="fa fa-github"></span></a>
        <a target="_blank" href="https://www.whatsapp.com/{{$social->whatsapp}}"><span class="fa fa-whatsapp"></span></a>
    </div>
    
    <!-- profile buttons -->
    <div class="lnks">
        <a href="#" class="lnk">
            <span class="text">Download CV</span>
        </a>
        <a href="#" class="lnk discover">
            <span class="text">Contact Me</span>
        </a>
    </div>

</div>
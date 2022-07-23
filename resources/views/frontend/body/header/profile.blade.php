@php
$about = DB::table('abouts')->first();  
@endphp
<div class="profile">
    <div class="title">{{$about->name}}</div>
    <div class="subtitle subtitle-typed">
        <div class="typing-title">
            <p>Web Designer</p>
            <p>Developer</p>
            <p>Freelancer</p>
        </div>
    </div>
</div>
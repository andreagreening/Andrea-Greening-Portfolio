@extends('layouts.app')

@section('content')
<div class="container">
  <div id="welcome">
    <div class="row">
      <div class="text-center">
        <h1>Hi, my name is Andrea...</h1>
        <h3>I'm a Junior Laravel Developer</h3>
      </div>
    </div>
  </div>
  <div id="about">
    <div class="row">
      <div class="col-sm-7">
        <p>I became infatuated with programming two years ago, when I discovered FreeCodeCamp. Several months later, a mentor turned me onto Laravel and Laracasts--I’ve been in love ever since. </p>
        <p>I dedicate time to growing my skillset each week and have built more than a dozen projects in the past year. I’ve showcased a few of my more recent ones <a href="#portfolio">HERE.</a> </p>
        <p>As a perpetual student, I intend on diving into Vue and Javascript in the near future. I also would like to nurture my knowledge of MySQL and hone my front end design skills.</p>
        <p>Aside from programming, I dedicate myself to growth in all facets of my life. I wake up before 5:00 nearly every morning. I am a gym rat, a vivacious cook, and an avid DIY’er.  I enjoy exploring, hiking, craft beer, flying my drone and taking in local music. </p>
        <p>I'm extremely excited to join a team where I can learn from my fellow developers, I expect to grow substantially with some professional experience.</p>
      </div>
      <div class="col-sm-5">
        <img src="/storage/images/731018f56e6fe62a3c993cb929ea35a0.jpeg" alt="" class="img-responsive">
      </div>
    </div>
   
<div id="portfolio">
  <div class="row text-center">
    <h2>Projects</h2>
  </div>
  <div class="row padding-bottom-30">
      <h4 class="text-center">Tiki Log</h4>
      <div class="col-sm-5"><img src="/storage/images/548202f54b1f89ef2a705028232ccd0e.png" alt="" class="img-responsive img-thumbnail"></div>
      <div class="col-sm-7">
      <p>This simple expense log allows you to log expenses as a team with your spouse, colleagues or friends. This project features a demo account to try, <a href="http://tikilog.com">check it out!</a></p>
      </div>
  </div>
  <div class="row margin-bottom-30">
    <h4 class="text-center">
      Raffle Jar
    </h4>
    <div class="col-sm-7">This raffle generation system allows for easy managment of basic raffles. Run multiple contests, keep track of winners and when the prizes are claimed. <a href="rafflejar.com">Check it out!</a></div>
    <div class="col-sm-5">
      <img src="/storage/images/8b937218cb581f38e87530c1d326f79c.png" alt="" class="img-responsive img-thumbnail">
    </div>
  </div>
  <div class="row">
    <h4 class="text-center">Text Me Weather</h4>
    <div class="col-sm-5 text-center">
      <img src="/storage/images/d0aaa6e7be5b47cfbf39d6fac8c5646c.jpeg" alt="" class="img-responsive img-thumbnail">
    </div>
    <div class="col-sm-7">Get personalized weather updates via SMS. Powered by Twilio and DarkSky APIs. <a href="http://textmeweather.com">Check it out!</a></div>
  </div>
  </div>
  </div>
</div>

@endsection
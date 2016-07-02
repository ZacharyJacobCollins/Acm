<!DOCTYPE html>
<html lang="en">
    
@include('layouts.head')


<body class="black">
    <div class="col s12">
      <ul class="tabs black">
        <li class="tab col s3" class="active"><a class="green-text" href="#whoweare">Who we are</a></li>
        <li class="tab col s3"><a  class="green-text" href="#employers">Employers</a></li>
        <li class="tab col s3"><a class="green-text" href="#members">Members</a></li>
        <li class="tab col s3"><a class="green-text" href="#hackathon">Hackathon</a></li>
        <li class="tab col s3"><a class="green-text" href="#timeline">Schedule</a></li>
      </ul>
    </div>

    <!-- Include tabbed pages -->
    @include('pages.welcome.employers')
    @include('pages.welcome.hackathon')
    @include('pages.welcome.timeline')
    @include('pages.welcome.members')
    @include('pages.welcome.whoweare')

 
</body>
  </br></br></br></br></br></br>
  </br></br></br></br></br></br>
  </br></br></br></br></br></br>
  @include('layouts.footer')
</html>

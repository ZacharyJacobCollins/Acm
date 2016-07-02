<!DOCTYPE html>
<html lang="en">
    
@include('layouts.head')


<body class="black">
    <div class="col s12">
      <ul class="tabs black">
        <li class="tab col s3" class="active"><a class="green-text" href="#whoweare">Who we are</a></li>
        <li class="tab col s3"><a href="#employers">Employers</a></li>
        <li class="tab col s3"><a class="cyan-text" href="#members">Members</a></li>
        <li class="tab col s3"><a class="deep-purple-text" href="#hackathon">Hackathon</a></li>
      </ul>
    </div>

    <!-- Include tabbed pages -->
    @include('pages.welcome.whowearetab')
    @include('pages.welcome.employertab')
    @include('pages.welcome.hackathontab')
    @include('pages.welcome.membertab')

 
</body>
  </br></br></br></br></br></br>
  </br></br></br></br></br></br>
  </br></br></br></br></br></br>
  @include('layouts.foot')
</html>

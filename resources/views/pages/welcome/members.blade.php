<!-- Members tab -->
  <div id="members" class="col s12">

          <!-- Banner -->    
        <div class="section no-pad-bot black" id="index-banner">
          <div class="container">
            <h1 class="header center green-text text-darken-4"><span class="white-text">Eastern Michigan</span> Acm</h1>
          </div>
        </div>

        <div class="col s2 offset-s5">
              <a href="/login" class="header center waves-effect waves-light btn green darken-4">Sign In</a>
              <a href="/members#home" class="header center waves-effect waves-light btn green darken-4">Members Page</a>
        </div>

      

        <h1 class="header center white-text text-darken-4">Our Members</h1>
        <!-- Iterate through members producing a card for each --> 
        <!-- Start the loop at 1 and do a weird thing to reference each index, subtract 1.  This is for the modulus stuff :/-->

        @foreach ($members as $key=>$member)
            
            @if ($key % 4 == 0)
                <div class="row">
            @endif
            
            <h1>{{ $key }}</h1>
                    <!-- Card -->
                    <div class="card grey darken-2 col s3">
                        <div class="card-image waves-effect waves-block waves-light">
                          <img class="activator" src="/images/toledo.jpg">
                        </div>
                        <div class="card-content">
                          <span class="card-title activator grey-text text-darken-4">{{ $member->name }}<i class="material-icons right">more_vert</i></span>
                          <p><a href="#">This is a link</a></p>
                        </div>
                        <div class="card-reveal">
                          <span class="card-title grey-text text-darken-4">Jeremy Karbowski with EEEE<i class="material-icons right">close</i></span>
                          <p>Here is some more information about this product that is only revealed once clicked on.</p>
                        </div>
                    </div>

            @if ($key % 4 == 0)
                </div>
            @endif
        
       @endforeach
    
   @include('layouts.footer')
</div>



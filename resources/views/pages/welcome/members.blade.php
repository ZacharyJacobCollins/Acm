<!-- Members tab -->
  <div id="members" class="col s12">

         <!-- Banner -->    
        <div class="section no-pad-bot black" id="index-banner">
            <div class="container">
                <div class="row center">
                    <div class="s12">@include('components.hoverlogo-slide')</div>
                </div>
            </div>
        </div>

        </br></br></br>

        <div class="center-align section">
            <a href="/members#home" class="header center waves-effect waves-light btn green darken-4">Login</a>
        </div>


        </br></br></br>

        <!-- Members container --> 
        <div class="section">  
            <!-- Iterate through members producing a card for each --> 
            @for($i=0; $i < count($members); $i++)

                @if ($i % 3 == 0 )
                    <div class="row">
                @endif

                  <div class="container">
                        <!-- Card -->
                        <div class="card grey darken-2 col l3 offset-l1">
                            <div class="card-image">
                              <img class="activator" src="/images/avatars/{{ $members[$i]->avatar }}">
                            </div>
                            <div class="card-content">
                              <span class="card-title activator grey-text text-darken-4">{{ $members[$i]->name }}<i class="material-icons right">more_vert</i></span>
                              <p><a href="#">{{ $members[$i]->languages }}</a></p>
                            </div>
                            <div class="card-reveal">
                              <span class="card-title grey-text text-darken-4">{{ $members[$i]->name }}<i class="material-icons right">close</i></span>
                              <p>{{ $members[$i]->bio }}</p>
                            </div>
                        </div>
                  </div>

                <!-- Spit out a div here on stuff--> 
                @if ( ($i / 3 == 1) || ($i == (count($members)-1)) )
                    </div>
                @endif
            
            @endfor
        </div>
    
   @include('layouts.footer')
</div>
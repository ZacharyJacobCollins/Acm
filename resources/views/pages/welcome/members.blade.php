<!-- Members tab -->
  <div id="members" class="col s12">

        <!-- Banner -->   
        </br></br></br> 
        <div class="section no-pad-bot black" id="index-banner">
            <div class="container">
                <div class="row center">
                    <div class="s12">@include('components.hoverlogo-slide')</div>
                </div>
            </div>
        </div>

        </br></br></br>

 
        <div class="container">
            <!-- Members container --> 
                <!-- Iterate through members producing a card for each --> 
                    @for($i=1; $i < count($members); $i++)
                            <div class="section">  
                                <!-- Card -->
                                <div class="card black col s1 ">
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
                    @endfor
        </div>
    
   @include('layouts.footer')
</div>
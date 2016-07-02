<!-- Spotlight section -->
    <div class="row">
    <div class="container">
        <h4 class="header center green-text text-darken-4"><span class="white-text">In the Spotlight</span></h4>
    </div>
    
   <div class="row">
    @for ($i = 0; $i < 3; $i++)
        <!-- Card -->
        <div class="card grey darken-2 col s4">
            <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="/images/toledo.jpg">
            </div>
            <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">Jeremy Karbowski with EEEE<i class="material-icons right">more_vert</i></span>
            <p><a href="#">This is a link</a></p>
            </div>
            <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Jeremy Karbowski with EEEE<i class="material-icons right">close</i></span>
            <p>Here is some more information about this product that is only revealed once clicked on.</p>
            </div>
        </div>
    @endfor
</div><!-- /Card section --> 
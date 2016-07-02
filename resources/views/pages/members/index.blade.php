@include('layouts.head')

<div class="container"><a href="#" data-activates="nav-mobile" class="button-collapse top-nav full hide-on-large-only"><i class="material-icons">menu</i></a>
    <!-- Side nav -->
    <ul id="nav-mobile" class="side-nav fixed">
        <img class="responsive-img" src="/images/logos/acm/logo.png">
        <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
                <li class="bold"><a class="collapsible-header  waves-effect waves-teal">Meetings</a>
                    <div class="collapsible-body">
                    <ul>
                        <li><a href="#">Sign in</a></li>
                    </ul>
                    <ul>
                        <li><a href="#">Schedule</a></li>
                    </ul>
                    </div>
                </li>
                <li class="bold"><a class="collapsible-header  waves-effect waves-teal">Resources</a>
                    <div class="collapsible-body">
                    <ul>
                        <li><a href="#">Class ratings</a></li>
                    </ul>
                    <ul>
                        <li><a href="#">Tests and quizzes</a></li>
                    </ul>
                    <ul>
                        <li><a href="#">Programming</a></li>
                    </ul>
                    <ul>
                        <li><a href="#">Resume Help</a></li>
                    </ul>
                    <ul>
                        <li><a href="#">Job postings</a></li>
                    </ul>
                    </div>
                </li>
            </ul>
        </li>
        <li class="bold"><a href="#" class="waves-effect waves-teal">Profile Settings</a></li>
    </ul>
    <!-- /Side nav -->
    
    <div id="ajax" class="row">
        <!-- Ajax content here -->
    </div>


    @include('forms.image')

</div>
@include('layouts.footer')

<!-- Ajax loader -->
@include('js.ajaxloader')

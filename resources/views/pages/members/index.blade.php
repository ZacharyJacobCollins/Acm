@include('layouts.head')

<div class="container"><a href="#" data-activates="nav-mobile" class="button-collapse top-nav full hide-on-large-only"><i class="material-icons">menu</i></a>
    <!-- Side nav -->
    <ul id="nav-mobile" class="side-nav fixed">
        <!-- Logo -->
        <img class="circle responsive-img" src="/images/logos/acm/logo.png">
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
                <li class="bold"><a class="collapsible-header  waves-effect waves-teal">Hackathons</a>
                    <div class="collapsible-body">
                    <ul>
                        <li><a href="#">Upcoming</a></li>
                    </ul>
                    <ul>
                        <li><a href="#">History</a></li>
                    </ul>
                    </div>
                </li>
                <li class="bold"><a href="#" class="waves-effect waves-teal">Volunteering</a></li>
            </ul>
        </li>
    </ul>
    <!-- /Side nav -->
    
    <!-- Target for ajax loading -->
    <h1 class="black-text"> Ajax target </h1>

</div>
@include('layouts.footer')
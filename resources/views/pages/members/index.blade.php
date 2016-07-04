@include('layouts.head')

    <!-- Floating button containing logout -->
    <div class="fixed-action-btn horizontal" style="bottom: 45px; right: 24px;">
    <a class="btn-floating btn-large green darken-4 ">
        <i class="large material-icons">settings</i>
    </a>
    <ul>
        <li><a href="/logout" class="btn-floating red"><i class="material-icons">power_settings_new</i></a></li>
    </ul>
    </div>

    <div class="container"><a href="#" data-activates="nav-mobile" class="button-collapse top-nav full hide-on-large-only"><i class="material-icons">menu</i></a>
        <!-- Side nav -->
        <ul id="nav-mobile" class="side-nav fixed">
            <div class="container section">
                <img class="responsive-img small-logo" src="/images/logos/acm.png">
            </div>
            <li class="bold"><a href="#home" class="waves-effect waves-purple">Home</a></li>
            <li class="no-padding">
                <ul class="collapsible collapsible-accordion">
                    <li class="bold"><a class="collapsible-header waves-effect waves-purple darken-1">Meetings</a>
                        <div class="collapsible-body">
                        <ul>
                            <li><a href="#signin">Sign in</a></li>
                        </ul>
                        <ul>
                            <li><a href="#schedule">Schedule</a></li>
                        </ul>
                        <ul>
                            <li><a href="#meetingcreate">Create a Meeting</a></li>
                        </ul>
                        </div>
                    </li>
                    <li class="bold"><a class="collapsible-header waves-effect waves-purple">Resources</a>
                        <div class="collapsible-body">
                        <ul>
                            <li><a href="#courses">Class ratings</a></li>
                        </ul>
                        <ul>
                            <li><a href="#exams">Tests and quizzes</a></li>
                        </ul>
                        <ul>
                            <li><a href="#programming">Programming</a></li>
                        </ul>
                        <ul>
                            <li><a href="#resumes">Resume Help</a></li>
                        </ul>
                        <ul>
                            <li><a href="#jobs">Job postings</a></li>
                        </ul>
                        </div>
                    </li>
                </ul>
            </li>
            <li class="bold"><a href="#profile" class="waves-effect waves-purple">Profile Settings</a></li>
        </ul>
        <!-- /Side nav -->
        
        <div id="ajax" class="row">
            <!-- Ajax content here -->
        </div>

    </div>

<!-- Ajax loader -->
@include('js.ajaxloader')
@include('layouts.scripts')
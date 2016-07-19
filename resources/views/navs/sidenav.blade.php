<!-- NOT IN USE-->

<!-- Side nav -->
<ul id="nav-mobile" class="side-nav fixed">
    @include('components.hoverlogo')
    </br></br>
    <li class="bold"><a href="#home" class="waves-effect {{ $color->mainWaves }}">Home</a></li>
    <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
            <li class="bold"><a class="collapsible-header waves-effect {{ $color->mainWaves }}">Meetings</a>
                <div class="collapsible-body">
                <ul>
                    <li><a href="#signin">Check in</a></li>
                </ul>
                <ul>
                    <li><a href="#schedule">Schedule</a></li>
                </ul>
                <ul>
                    <li><a href="#meetingcreate">Create a Meeting</a></li>
                </ul>
                </div>
            </li>
            <li class="bold"><a class="collapsible-header waves-effect {{ $color->mainWaves }}">Resources</a>
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
                    <li><a href="http://docs.emmet.io/cheat-sheet/">Snippets</a></li>
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
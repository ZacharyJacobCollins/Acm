@include('layouts.head')

 <div class="fixed-action-btn horizontal" style="bottom: 45px; right: 24px;">
    <a class="btn-floating btn-large green darken-4 ">
      <i class="large material-icons">menu</i>
    </a>
    <ul>
      <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
      <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
      <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
      <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
    </ul>
  </div>

<div class="container"><a href="#" data-activates="nav-mobile" class="button-collapse top-nav full hide-on-large-only"><i class="material-icons">menu</i></a>
    <!-- Side nav -->
    <ul id="nav-mobile" class="side-nav fixed">
        <img class="responsive-img" src="/images/logos/acm/logo.png">
        <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
                <li class="bold"><a href="#" class="collapsible-header waves-effect waves-teal">Meetings</a>
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
        <li class="bold"><a href="#profile" class="waves-effect waves-teal">Profile Settings</a></li>
    </ul>
    <!-- /Side nav -->
    
    <div id="ajax" class="row">
        <!-- Ajax content here -->
    </div>



</div>

<!-- Ajax loader -->
@include('js.ajaxloader')
@include('layouts.scripts')

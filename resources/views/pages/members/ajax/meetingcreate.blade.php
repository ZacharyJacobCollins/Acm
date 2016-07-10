<h1 class="green-text text-lighten-1"> Manage Meetings </h1>
<div class="divider"></div>

<div class="section">
    <h2> Create a new meeting </h2>
    <div class="row">
    <form class="col s12" enctype="multipart/form-data" action="/meeting/create" method="POST">
        {!! csrf_field() !!}
        <div class="row">
            <div class="input-field col s12">
                <i class="material-icons prefix">label</i>
                <input name="title" id="title" type="text" class="validate">
                <label for="title">Meeting Title</label>
            </div>
            <div class="input-field col s12">
                <i class="material-icons prefix">subtitles</i>
                <input name="subject" id="subject" type="tel" class="validate">
                <label for="subject">Subject of meeting</label>
            </div>
            <div class="input-field col s4">
                <i class="material-icons prefix">perm_contact_calendar</i>
                @include('components.datepicker')
                <label for="datepicker">Choose a date</label>
            </div>
            <div class="input-field col s4">
                <i class="material-icons prefix">trending_up</i>
                <input name="starttime" id="starttime" type="tel" class="validate">
                <label for="starttime">Enter a starting time for meeting</label>
            </div>
            <div class="input-field col s4">
                <i class="material-icons prefix">trending_down</i>
                <input name="endtime" id="endtime" type="tel" class="validate">
                <label for="endtime">Enter an end time for the meeting</label>
            </div>
             <div class="input-field col s12">
                <textarea name="avatar" id="avatar" class="materialize-textarea"></textarea>
                <label for="avatar">AVATAR IMAGE UPLOAD HERE</label>
            </div>
            <!--<div class="file-field input-field col s6">
                <div class="btn">
                    <span>Meeting avatar</span>
                    <input name="avatar" type="file">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" placeholder="Upload an image for the meeting avatar">
                </div>
            </div>-->
            <div class="input-field col s6">
                <i class="material-icons prefix">account_circle</i>
                <input name="speaker" id="speaker" type="tel" class="validate">
                <label for="spearker">Who will be speaking at the meeting?</label>
            </div>
            <div class="input-field col s12">
                <textarea name="description" id="description" class="materialize-textarea"></textarea>
                <label for="description">Description of meeting</label>
            </div>
        </div>
        <input type="submit" class="waves-effect waves-light btn">
    </form>
    </div>
</div>


<h1 class="green-text text-lighten-1"> Manage Meetings </h1>
<div class="divider"></div>

<div class="section">
    <h2> Create a new meeting </h2>
    <div class="row">
    <form class="col s12">
        <div class="row">
            <div class="input-field col s12">
                <i class="material-icons prefix">label</i>
                <input id="icon_prefix" type="text" class="validate">
                <label for="icon_prefix">Meeting Title</label>
            </div>
            <div class="input-field col s12">
                <i class="material-icons prefix">subtitles</i>
                <input id="icon_telephone" type="tel" class="validate">
                <label for="icon_telephone">Subject of meeting</label>
            </div>
            <div class="input-field col s4">
                <i class="material-icons prefix">perm_contact_calendar</i>
                @include('components.datepicker')
                <label for="datepicker">Choose a date</label>
            </div>
            <div class="input-field col s4">
                <i class="material-icons prefix">trending_up</i>
                <input id="start" type="tel" class="validate">
                <label for="start">Enter a starting time for meeting</label>
            </div>
            <div class="input-field col s4">
                <i class="material-icons prefix">trending_down</i>
                <input id="end" type="tel" class="validate">
                <label for="end">Enter an end time for the meeting</label>
            </div>
            <div class="file-field input-field col s6">
                <div class="btn">
                    <span>Meeting avatar</span>
                    <input type="file">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" placeholder="Upload an image for the meeting avatar">
                </div>
            </div>
            <div class="input-field col s6">
                <i class="material-icons prefix">account_circle</i>
                <input id="speaker" type="tel" class="validate">
                <label for="spearker">Who will be speaking at the meeting?</label>
            </div>
            <div class="input-field col s12">
                <textarea id="textarea1" class="materialize-textarea"></textarea>
                <label for="textarea1">Description of meeting</label>
            </div>
        </div>
    </form>
    </div>
</div>


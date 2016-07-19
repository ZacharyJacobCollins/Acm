<h1 class="{{ $color->mainText }}"> Check into the meeting today </h1>
<div class="divider"></div>
</br></br>

<form method="POST" action="/meeting/checkin">
    {!! csrf_field() !!}
    <div class="input-field col s12 m6">
        <select class="icons {{ $color->mainColorText }}" name="checkin">
            <option class="{{ $color->mainColorText }}" value="default" disabled selected>Sign in</option>
            @foreach($meetings as $meeting) 
                <option value="{{ $meeting->title }}" data-icon="images/icons/handpoint.png" class="circle">{{ $meeting->title }}</option>
            @endforeach
        </select>
    </div>

    </br>

    <button class="btn waves-effect waves-light {{ $color->mainColor }}" type="submit">Submit
        <i class="material-icons right">send</i>
    </button>
</form>

<script>
    //Initialize the dropdown
    $(document).ready(function() {
        $('select').material_select();
    });
</script>
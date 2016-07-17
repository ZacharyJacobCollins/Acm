<h1 class="green-text text-lighten-1"> Upcoming meetings and events </h1>
<div class="divider"></div>

  @if(count($meetings) === 0)
      <div class="row">
        <h2>There are no meetings currently scheduled</h2>
      </div>
  @endif

  @foreach ($meetings as $meeting) 
    <div class="row">
      <p> Title: {{ $meeting->title }} </p>
      <p> Subject: {{ $meeting->subject }} </p>
    </div>
  @endforeach
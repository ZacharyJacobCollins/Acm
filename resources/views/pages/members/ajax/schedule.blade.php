<h1 class="green-text text-lighten-1"> Upcoming meetings and events </h1>
<div class="divider"></div>

@foreach ($meetings as $meeting) 

    <h1>{{ $meeting->title }} </h1>

@endforeach
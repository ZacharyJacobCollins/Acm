<!-- if no meeting in session you done messed up -->

<h1 class="green-text text-lighten-1"> Meeting Review </h1>
<div class="divider"></div>

<form method="POST" action="/meeting/create">
    <ul class="collection">
    {{ $meeting->title }}
  
        <li class="collection-item avatar">
            <i class="material-icons circle red">play_arrow</i>
            <span class="title"></span>
            <p>  </p>
            <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
        </li>
   
  </ul>
</form>
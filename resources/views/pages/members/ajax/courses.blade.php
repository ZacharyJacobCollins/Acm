<h1 class="{{ $color->mainText }}"> Courses </h1>
<div class="divider"></div>

<table class="responsive-table highlight">
    <thead>
        <tr>
            <th data-field="course">Course Id</th>
            <th data-field="professor">Professor</th>
            <th data-field="description">Description</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($courses as $course) 
            <tr>
                <td><a href="{{ $course->link }}">{{ $course->courseId }}</a></td>
                <td>{{ $course->professors }}</td>
                <td>{{ $course->description }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
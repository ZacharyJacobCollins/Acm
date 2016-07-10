<div class="content-center">

    <h2> Profile </h2>
    </br></br>
    <form enctype="multipart/form-data" action="/file/avatar" method="POST">
        {!! csrf_field() !!}
        <label>Change your profile Image</label>
        </br></br>
        <input type="file" name="avatar">
        <input type="submit"> 
        </br></br>
        </br></br>
    </form>
</div>

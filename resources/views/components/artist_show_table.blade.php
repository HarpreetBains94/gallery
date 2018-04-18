<div id="" style="height:60vh; overflow-x:hidden">
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col" style="width: 10%">Edit</th>
      <th scope="col" style="width: 10%">Remove</th>
      <th scope="col" style="width: 10%">Name</th>
      <th scope="col" style="width: 10%">Image</th>
      <th scope="col" style="width: 60%">Bio</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($artists as $artist)
      <tr>
        <td>
          <a href="/artists/{{$artist->id}}/edit">
            <button type="button" class="btn btn-info">
              <span class="glyphicon glyphicon-search"></span> Edit
            </button>
          </a>
        </td>
        <td>
          {!! Form::open(['route' => ['artists.destroy', $artist->id], 'method' => 'DELETE']) !!}

            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}

          {!! Form::close() !!}
        </td>
        <td>{{$artist->name}}</td>
        <td><img src='\storage\media\artist_images\{{ $artist->image_path }}' class="img-fluid"></td>
        <td><div style="height:100px; overflow-x:hidden">{{$artist->bio}}</div></td>
      </tr>
    @endforeach
  </tbody>
</table>
</div>
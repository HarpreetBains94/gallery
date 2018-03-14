<div id="" style="height:60vh;">
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col" style="width: 7%">Edit</th>
      <th scope="col" style="width: 7%">Remove</th>
      <th scope="col" style="width: 7%">Title</th>
      <th scope="col" style="width: 7%">Artist</th>
      <th scope="col" style="width: 7%">Image</th>
      <th scope="col" style="width: 7%">Medium</th>
      <th scope="col" style="width: 7%">Dimensions</th>
      <th scope="col" style="width: 7%">Price</th>
      <th scope="col" style="width: 7%">On Sale</th>
      <th scope="col" style="width: 10%">Creation Date</th>
      <th scope="col" style="width: 27%">Description</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($arts as $art)
      <tr>
        <td>
          <a href="/ims/art/edit/id={{$art->id}}">
            <button type="button" class="btn btn-info">
              <span class="glyphicon glyphicon-search"></span> Edit
            </button>
          </a>
        </td>
        <td>
          <a href="/ims/art/remove/id={{$art->id}}">
            <button type="button" class="btn btn-danger" data-toggle="confirmation">
               Delete
            </button>
          </a>
        </td>
        <td>{{$art->title}}</td>
        <td>{{\DB::table('artists')->where('id', $art->artist_id)->get()[0]->name}}</td>
        <td><img src='\storage\media\test_images\{{ $art->image_path }}' class="img-fluid"></td>
        <td>{{$art->medium}}</td>
        <td>{{$art->dimensions}}</td>
        <td>{{$art->price}}</td>
        <td>{{$art->on_sale}}</td>
        <td>{{$art->creation_date}}</td>
        <td><div style="height:100px; overflow-x:hidden">{{$art->description}}</div></td>
      </tr>
    @endforeach
  </tbody>
</table>
</div>
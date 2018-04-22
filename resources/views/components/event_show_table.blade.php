<div id="" style="height:60vh;">
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col" style="width: 15%">Edit</th>
      <th scope="col" style="width: 15%">Remove</th>
      <th scope="col" style="width: 15%">Title</th>
      <th scope="col" style="width: 15%">Price</th>
      <th scope="col" style="width: 15%">Date</th>
      <th scope="col" style="width: 25%">Description</th>
    </tr>
  </thead>
  <tbody>
    @if(!empty($events))
      @foreach ($events as $event)
        <tr>
          <td>
            <a href="/events/{{$event->id}}/edit">
              <button type="button" class="btn btn-info">
                <span class="glyphicon glyphicon-search"></span> Edit
              </button>
            </a>
          </td>
          <td>
            {!! Form::open(['route' => ['events.destroy', $event->id], 'method' => 'DELETE']) !!}

              {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}

            {!! Form::close() !!}
          </td>
          <td>{{$event->title}}</td>
          <td>{{$event->price}}</td>
          <td>{{$event->date}}</td>
          <td><div style="height:100px; overflow-x:hidden">{{$event->description}}</div></td>
        </tr>
      @endforeach
    @endif
  </tbody>
</table>
</div>
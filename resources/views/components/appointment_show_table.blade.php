<div id="" style="height:60vh;">
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col" style="width: 15%">Approve</th>
      <th scope="col" style="width: 15%">Remove</th>
      <th scope="col" style="width: 15%">Name</th>
      <th scope="col" style="width: 15%">Email</th>
      <th scope="col" style="width: 15%">Date</th>
      <th scope="col" style="width: 15%">Requested Art</th>
    </tr>
  </thead>
  <tbody>
    @if(!empty($appointments))
      @foreach ($appointments as $appointment)
        <tr>
          <td>
            <a href="/appointments/{{$appointment->id}}/edit">
              <button type="button" class="btn btn-info">
                <span class="glyphicon glyphicon-search"></span> Approve
              </button>
            </a>
          </td>
          <td>
            {!! Form::open(['route' => ['appointments.destroy', $appointment->id], 'method' => 'DELETE']) !!}

              {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}

            {!! Form::close() !!}
          </td>
          <td>{{$appointment->name}}</td>
          <td>{{$appointment->email}}</td>
          <td>{{$appointment->appointment_date}}</td>
          <td>{{\DB::table('arts')->where('id', $appointment->art_id)->get()[0]->title}}</td>
        </tr>
      @endforeach
    @endif
  </tbody>
</table>
</div>
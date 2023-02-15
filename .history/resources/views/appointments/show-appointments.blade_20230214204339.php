{{-- @extends('../layout/' . $layout)

@section('subhead')
    <title>Add Patient</title>
@endsection

@section('subcontent') --}}

    <div class="container">
        <h3>Appointmants</h3>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Appointment Date</th>
                    <th>Appointment Time</th>
                    {{-- <th>Image</th> --}}
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($appointments as $appointment)
                    <tr>
                        <td>{{ $appointment->appointment_id }}</td>
                        <td>{{ $appointment->appointment_date }}</td>
                        <td>{{ $appointment->appointment_time }}</td>
                        {{-- <td><img src="{{ file_exists(public_path('storage/' . $appointment->appointment_image)) ? asset('storage/' . $appointment->appointment_image) : asset($appointment->appointment_image) }}" width="200"></td> --}}
                        <td>
                            <form action="{{ url('appointments/'.$appointment->appointment_id) }}" method="POST">
                                <a class="btn btn-primary" href="{{ url('appointments/'.$appointment->appointment_id) }}">View</a>
                                <a class="btn btn-primary" href="{{ url('appointments/'.$appointment->appointment_id.'/edit') }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

{{-- </x-layout> --}}

@include('header-footar');
      {{-- <h1>Student</h1> --}}

      <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-warning">Student Record</div>
            <div class="card-body">
                <table class="table table-striped">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Class</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        @foreach ($student as $data)
                        <tbody>
                            <td>{{ $data->id }}</td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->class }}</td>
                            <td>
                                <a href="{{ route('data.view' ,$data->id) }}"><button class="btn btn-primary btn-sm">View</button></a>
                                <a href="{{ url('delete/' . $data->id) }}"><button class="btn btn-danger btn-sm">Trash</button></a>
                                <a href="{{ url('edit' ,$data->id) }}"><button class="btn btn-warning btn-sm">Edit</button></a>
                            </td>
                        </tbody>
                        @endforeach
                    </tr>
                </table>
            </div>
        </div><br>
    <a href="{{ route('form') }}"><button class="btn btn-success btn-lg" style="float: right">Add New</button></a>

      </div><br>
      <div class="container">
        {{ $student->links() }}
      </div>


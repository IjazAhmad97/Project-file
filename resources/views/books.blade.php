@include('header-footar');
<div class="container">
    {{-- @if (@session()->has('success'))
        <div class="alert alert-success">{{ sesion('success') }}</div>

    @endif --}}
    <div class="card">
        <div class="card-header">Books Record</div>
        <div class="card-body">
            <table class="table table-striped table-bordered">
                <tr>
                    <th>Student Id</th>
                    <th>Book Title</th>
                    <th>Book Description</th>
                    <th>Action</th>
                </tr>
                <tr>
                    @foreach ($books as $item)
                        <tbody>
                            <td>{{ $item->stu_id }}</td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->description }}</td>
                            <td>
                                <a href="#"><button class="btn btn-primary btn-sm">view</button></a>
                                <a href="{{ route('delete.book', $item->id) }}"><button class="btn btn-danger btn-sm">Trash</button></a>
                                <a href="#"><button class="btn btn-info btn-sm">Edit</button></a>
                            </td>
                        </tbody>
                   @endforeach
                </tr>
            </table>
        </div>
    </div><br>
    <a href="{{ route('add-books') }}"><button class="btn btn-success btn-sm" style="float: right">New Record</button></a>
</div>

@include('header-footar')
<br>
    <div class="container">
        <div class="card">
            <div class="card-header">Adding Data</div>
            <div class="card-body">
        <form action="{{ route('data.store') }}" method="post">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="text" class="form-control" name="name" placeholder="Enter name">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Class</label>
          <input type="text" class="form-control" name="class" placeholder="Class">
        </div>
        {{-- <div class="form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div> --}}
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    </div>
    </div>


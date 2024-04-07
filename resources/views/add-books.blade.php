@include('header-footar')
<br>

<div class="container">
    <div class="card">
        <div class="card-header">Adding Data</div>
        <div class="card-body">
    <form action="{{ route('store-books') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="stu_id" >Student_Id</label>
        <select name="stu_id" id="">
            <option value="name">{{ $student->name }}</option>
        </select>
        {{-- <input type="text" class="form-control" value="{{ $book->stu_id }}" name="title" placeholder="Enter name"> --}}
      </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Title</label>
      <input type="text" class="form-control" name="title" placeholder="Enter name">
      {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Description</label>
      <input type="text" class="form-control" name="description" placeholder="Class">
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

<h1>create page</h1>
<a href="http://127.0.0.1:8000">back</a>
<form method="POST" action="">
    @csrf
    <div class="form-group">
        <label for="first_name">First Name</label>
        <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter your first name">
    </div>
    <div class="form-group">
        <label for="last_name">Last Name</label>
        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter your last name">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

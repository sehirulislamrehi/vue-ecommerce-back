@if(session()->has('success'))
<div class="alert alert-success">
     {{ session()->get('success') }}
</div>
@endif
<h1>Welcome to the admin panel</h1>
<form action="{{ route('do.logout') }}" method="post">
     @csrf
     <button type="submit">Logout</button>
</form>
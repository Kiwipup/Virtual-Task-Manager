@extends('layout')

@section('content')

  <div class="col-9 justify-content-center">

    <nav class="navbar navbar-expand-lg navbar-light bg-light rounded-top border-bottom border-secondary">

    <ul id="dashboard-nav" class="list-inline">
      <li class="list-inline-item nav-item">
        <a class="nav-link" href="/primary-views/dashboard">Calendar</a>
      </li>
      <li class="list-inline-item nav-item">
        <a class="nav-link" href="/primary-views/reports">Reports</a>
      </li>
      <li class="list-inline-item nav-item">
        <a class="nav-link" href="/primary-views/groups">Groups</a>
      </li>
      <li class="list-inline-item nav-item">
        <a class="nav-link" href="/primary-views/accountinfo">Account Information</a>
      </li>
    </ul>

</nav>
  <h1>Incomplete tasks will go here</h1>
  <h1>Items completed report will go here</h1>
  <h1>Productivity graph will go here</h1>

  </div>


@endsection

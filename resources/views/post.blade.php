@extends('layouts')

@section('title', 'Post')

@section('contents')
<!-- Code -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Page Header
        <small>Optional description</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

    </section>
    <!-- /.content -->
    @if(empty($posts))
      <p>No Data</p>
    @else
      <table border="1px" class="table">
        <thead>
          <th>User_id</th>
          <th>Content</th>
        </thead>
        <tbody>
          @foreach($posts as $post)
            <tr>
              <td>{{$post['user_id']}}</td>
              <td>{{$post['content']}}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    @endif
  </div>
@endsection
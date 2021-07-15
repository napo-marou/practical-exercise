@extends('user')

@section('main')
<div class="row">
<div class="col-sm-12">
    <legend style="text-align: center;">Users Management and Authentication</legend>
    <div>
    <a style="margin: 19px;" href="{{ route('register')}}" class="btn btn-primary">New user</a>
    </div>     
  <table class="table table-striped">
    <thead>
        <tr class="dark">
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th colspan = 2>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>
                <a href="{{ route('users.edit',$user->id)}}" class="btn btn-primary btn-sm">Edit</a>
            </td>
            <td>
                <form action="{{ route('users.destroy', $user->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
  <br><hr>
  <legend style="text-align: center;">File Management ans Search</legend>
  
    <div class="col-sm-4">
      <form method="POST" action="info.php" enctype="multipart/form-data">
        <input type="file" name="uptext" accept=".txt" style="width: 200px;" /><button class="btn btn-primary form-inline"><i class="fa fa-arrow-up"></i></button>
      </form>
    </div>
    <div class="col-sm-8">
      <form method="get">
        <div class="form-group">
          <input type="text" name="s" class="form-group form-inline" placeholder="Search" autocomplete="none" style="width: 60%;" /><button type="submit" class="btn btn-info form-inline"><i class="fa fa-search"></i></button>
        </div>
      </form>
    </div>
  
  <table class="table table-striped">
    <thead>
        <tr class="dark">
          <th>#</th>
          <th>Filename</th>
          <th>Size</th>
          <th>Date uploaded</th>
          <th>Matches</th>
          <th colspan = 2>Actions</th>
        </tr>
    </thead>
    <tbody>
  <?php
    
    $i=0;
    $k=0;
    $filesorter = [];
    foreach (glob("*.txt") as $filename) {
      $i++;
      $found = 0;
      if(isset($_GET["s"])){
        $getText = file_get_contents($filename, true);
        $search = $_GET["s"];
        $found = substr_count($getText ,$search);

        if($found>0){
          
          $filesorter[$k] = array('no' => $k+1, 'filename' => $filename,'filesize' => filesize($filename), 'filematches' => $found);
          $k++;
          
        }
      }
      else{
        echo "<tr> <td>$i</td><td><a href='$filename' target='_blank'>$filename</a></td><td>" . ceil(filesize($filename)) . "B</td><td>".date('F d Y H:i',filemtime($filename))."</td><td>".$found."</td> <td>
                <a href='' class='btn btn-primary btn-sm'>Change</a>
            </td>
            <td>
                  <a href='info.php?file=".$filename."' class='btn btn-danger btn-sm'>Delete</a>
            </td></tr>";
      }
      
    }
    if(isset($_GET["s"])){
      foreach ($filesorter as $key => $value) {
        echo "<tr> <td>".$value['no']."</td><td><a href='".$value["filename"]."' target='_blank'>".$value['filename']."</a></td><td>" . $value['filesize'] . "B</td><td></td><td>".$value['filematches']."</td> 
            <td><a href='' class='btn btn-primary btn-sm'>Change</a>
            </td>
            <td>
                  <a href='info.php?file=".$value["filename"]."' class='btn btn-danger btn-sm'>Delete</a>
            </td>
        </tr>";
      }
      
    }
  ?>
  </tbody>
  <tfoot>
    <tr></tr>
  </tfoot>
  </table>
  <div><hr></div>
</div>

@endsection
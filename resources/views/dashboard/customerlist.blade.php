@extends('layouts.apps')

@section('content')
<div class="uk-card uk-card-default">
                                <div class="uk-card-header">
                                    Customer List
                                </div>
                                <div class="uk-card-body">
                                    <table class="uk-table uk-table-striped">
                                        <thead>
                                            <tr> 
                                                <th scope="col">#</th>
                                                <th scope="col">Name</th> 
                                                <th scope="col">Email</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
@foreach($members as $count=> $user) 
    <tr>
      <th scope="row">{{++$count}}</th> 
      <td>{{$user['name']}}</td>
      <td>{{$user['email']}}</td>
      <td>
      <a href={{"memberupdate/".$user['id']}}>Edit</a>
      <a href={{"delete/".$user['id']}}>Delete</a>
      </td>
    </tr> 
@endforeach
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>

@endsection
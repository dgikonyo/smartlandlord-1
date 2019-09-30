@extends('layouts.app')
@section('content')
  @if(count($buidings)>0)
      @foreach ($buidings as $buidings)
      <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Buildings</th>
              <th scope="col">City</th>
              <th scope="col">No. of Houses</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row"><a href="/{{$buildings->id}}">{{$buildings->id}}</a></th>
              <td>{{$post->buildingName}}</td>
              <td>{{$post->city}}</td>
              <td>{{$post->numberOfHouses}}</td>
            </tr>
          </tbody>
        </table>
      @endforeach
      {{$posts->links()}}
  @else
      <p>NO Buildings found</p>
  @endif
@endsection
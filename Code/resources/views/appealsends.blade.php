@extends('layouts.master')

@section('title', 'Home')

@section('content')

<style>

th{
    text-align: center;
}




</style>

<div class="mb-3">
    <h3>My Requests</h3>
    <div>

    <table class="table" style="text-align: center; width: 100%; margin-top: 2px;">
        <thead>
          <tr>
                <th scope="col" style=" aligin-items: center;">Product</th>
                <th scope="col" style="">Action</th>
            </tr>
        </thead>
            <tbody>
            @foreach ($appeals as $appeal)
                    <tr style="">
                        <td style=""><a href="/product/{{$appeal["product_id"]}}">{{$appeal["product_name"]}}</a></td>
                        <td>
                            <form action="appeal/delete/{{ $appeal["id"] }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                            
                        </td>
                    </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    
  </div>


@endsection
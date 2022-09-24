@extends('layouts.master')

@section('title', 'Home')

@section('content')

<style>

th{
    text-align: center;
}




</style>

<div class="mb-3">
    <h3>My appeals</h3>
    <div>

    <table class="table" style="text-align: center; width: 100%; margin-top: 2px;">
        <thead>
          <tr>
                <th scope="col" style=" aligin-items: center;">Product</th>
                <th scope="col" style="">User Phone Number</th>
                {{-- <th scope="col" style="">Action</th> --}}
                <th scope="col" style="">User Profile</th>
            </tr>
        </thead>
            <tbody>
            @foreach ($appeals as $temp)
                @foreach ( $temp as $appeal )
                    <tr style="">
                        <td style=""><a href="/product/{{$appeal["product_id"]}}">{{$appeal["product_name"]}}</a></td>
                        <td style="">{{ $appeal["phone"] }}</td>
                        {{-- <td style=" display:flex; justify-content:space-around; padding: 1%;">
                            <a href="appeal/accept/{{ $appeal["id"] }}"><button type="button" class="btn btn-success">Accept</button></a>
                            <a href="appeal/accept/{{ $appeal["id"] }}"><button type="button" class="btn btn-danger">Refuse</button></a>
                        </td> --}}
                        <td>
                            <a href="/user/profile/{{ $appeal["user_id"] }}"><button type="button" class="btn btn-primary">Vist</button></a>
                        </td>  
                    </tr>
                @endforeach
            @endforeach
            </tbody>
        </table>
    </div>
    
  </div>


@endsection
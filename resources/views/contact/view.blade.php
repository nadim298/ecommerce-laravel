@extends('layouts/app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header bg-success">
            Contact Messages
          </div>
          <div class="card-body">
            @if (session('deletestatus'))
              <div class="alert alert-danger">
                {{session('deletestatus')}}
              </div>
            @endif
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Sender Name</th>
                  <th scope="col">Sender Email Address</th>
                  <th scope="col">Message</th>
                </tr>
              </thead>
              <tbody>
                @forelse ($contacts as $contact)
                  <tr class="{{($contact->read_status==1)?"bg-info":""}}">
                    <td>{{$loop->index+1}}</td>
                    <td>{{$contact->name}}</td>
                    <td>{{$contact->email_address}}</td>
                    <td>{{$contact->message}}</td>
                  </tr>
                @empty
                  <tr class="text-center text-danger">
                    <td colspan="9">No Data Available</td>
                  </tr>
                @endforelse

              </tbody>
            </table>
            {{$contacts->links()}}
          </div>
        </div>

      </div>


    </div>


  </div>
@endsection

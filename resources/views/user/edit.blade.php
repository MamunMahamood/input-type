@extends('layouts.master')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header bg-color-header">
                <h3 class="card-title mt-1 bold">User Edit</h3>
                <a href="{{route('user.list')}}" class="btn btn-primary float-right">Back to List</a>
            </div>


            <div class="card-body">
                <form action="{{ route('user.update',['id'=>$user->id]) }}" method="POST" enctype="multipart/form-data">
                    <div class="card-body">
                        @csrf
                        <div class="form-row">

                            
                        @include('user.layouts._form')

                        </div>



                    </div>


                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Create</button>
                        <input class="float-right" type="reset" value="Reset Form">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection


@section('script')

<script>
    function updateRatingValue(value) {
        document.getElementById('ratingValue').textContent = value;
    }
</script>
@endsection
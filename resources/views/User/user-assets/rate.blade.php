@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">How was your experience?</div>

                <div class="card-body">
                    <form method="POST" action="/user/rate/{{$order->id}}">
                        {{ csrf_field() }}
                        {{method_field('post')}}
                        <div class="stars">
                            <input class="star star-5" id="star-5" type="radio" name="rating" value="5"/>
                            <label class="star star-5" for="star-5"></label>
                            <input class="star star-4" id="star-4" type="radio" name="rating" value="4"/>
                            <label class="star star-4" for="star-4"></label>
                            <input class="star star-3" id="star-3" type="radio" name="rating" value="3"/>
                            <label class="star star-3" for="star-3"></label>
                            <input class="star star-2" id="star-2" type="radio" name="rating" value="2"/>
                            <label class="star star-2" for="star-2"></label>
                            <input class="star star-1" id="star-1" type="radio" name="rating" value="1"/>
                            <label class="star star-1" for="star-1"></label>
                        </div>
                        <button type="submit" class="btn btn-dark btn-lg btn-block" style="background: rgba(47, 24, 70, 0.897);">Rate</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
                                {{-- <form method="POST" action="/user/rate/{{$order->id}}">
                                {{ csrf_field() }}
                                {{method_field('post')}}
                                <!-- Button trigger modal -->
                                @if (!($order->rating))
                                <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModalCenter">
                                    Rate
                                </button>
                                @else
                                <p>Rated</p>
                                @endif

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">How was your food?</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="stars">
                                                    <input class="star star-5" id="star-5" type="radio" name="rating" value="5"/>
                                                    <label class="star star-5" for="star-5"></label>
                                                    <input class="star star-4" id="star-4" type="radio" name="rating" value="4"/>
                                                    <label class="star star-4" for="star-4"></label>
                                                    <input class="star star-3" id="star-3" type="radio" name="rating" value="3"/>
                                                    <label class="star star-3" for="star-3"></label>
                                                    <input class="star star-2" id="star-2" type="radio" name="rating" value="2"/>
                                                    <label class="star star-2" for="star-2"></label>
                                                    <input class="star star-1" id="star-1" type="radio" name="rating" value="1"/>
                                                    <label class="star star-1" for="star-1"></label>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-secondary">Rate</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form> --}}
@endsection

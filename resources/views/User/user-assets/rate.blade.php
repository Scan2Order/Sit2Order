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
                        <div class="rating">
                            <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label>
                            <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label>
                            <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label>
                            <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label>
                            <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>
                        </div>
                        <div>
                            <h1 class="row justify-content-center">Leave a Comment</h1>
                            <textarea name="comment" id="user-comment"></textarea>
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

<style>
    /* div.stars{
    width: 270px;
    display: inline-block;
}

input.star{
    display: none;
}

label.star {
    float: right;
    padding: 10px;
    font-size: 36px;
    color: #444;
    transition: all .2s;
}

input.star:checked ~ label.star:before {
    content:'\f005';
    color: #FD4;
    transition: all .25s;
}


input.star-5:checked ~ label.star:before {
    color:#FE7;
    text-shadow: 0 0 20px #952;
}

input.star-1:checked ~ label.star:before {
    color: #F62;
}

label.star:hover{
    transform: rotate(-15deg) scale(1.3);
}

label.star:before{
    content:'\f006';
    font-family: FontAwesome;
}

.rev-box{
    overflow: hidden;
    height: 0;
    width: 100%;
    transition: all .25s;
}

textarea.review{
    background: #222;
    border: none;
    width: 100%;
    max-width: 100%;
    height: 100px;
    padding: 10px;
    box-sizing: border-box;
    color: #EEE;
}

label.review{
    display: block;
    transition:opacity .25s;
}



input.star:checked ~ .rev-box{
    height: 125px;
    overflow: visible;
} */
</style>
@endsection

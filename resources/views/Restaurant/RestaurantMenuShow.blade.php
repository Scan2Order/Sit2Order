@extends('layouts.app')

@section('content')
<span class="filter" v-bind:class="{ active: currentFilter === 'RICE' }" v-on:click="setFilter('ALL')"><a href="/menu?categories=Nasi" target="_self"><input type="button"><a href="/menu?categories=Nasi" target="_self">RICE</a></a></span>
<span class="filter" v-bind:class="{ active: currentFilter === 'BREAD' }" v-on:click="setFilter('ART')"><a href="/menu?categories=Roti" target="_self"><input type="button"><a href="/menu?categories=Roti" target="_self">Bread</a></a></span>
<span class="filter" v-bind:class="{ active: currentFilter === 'Beverages' }" v-on:click="setFilter('WORKSHOPS')"><a href="/menu?categories=Minuman" target="_self"><input type="button"><a href="/menu?categories=Minuman" target="_self">Beverage</a></a></span>

@foreach ($products as $product)
<rest-menu categories=" {{$product->categories}}" name="{{$product->name}}" description="{{$product->description}}" price="{{number_format($product->price,2)}}"></rest-menu>
@endforeach
@endsection
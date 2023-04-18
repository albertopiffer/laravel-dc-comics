@extends('layouts.layout')

<div class="container">

    <div class="row">
        <div class="col-12">
            <h1>{{ $comic->title }}</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <img src="{{ $comic->thumb }}" alt="">
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <p>{{ $comic->description }}</p>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <p>{{ $comic->price }}</p>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <p>{{ $comic->series }}</p>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <p>{{ $comic->sale_date }}</p>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <p>{{ $comic->type }}</p>
        </div>
    </div>

</div>
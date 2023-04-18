@extends('layouts.layout')

<div class="container">
    <h4>new comic</h4>
</div>

<div class="container">
    <form action="{{ route('comics.store') }}" method="POST">


        {{-- $newcomic->title = $comic['title'];
            $newcomic->description = $comic['description'];
            $newcomic->thumb = $comic['thumb'];
            $newcomic->price = $comic['price'];
            $newcomic->series = $comic['series'];
            $newcomic->sale_date = $comic['sale_date'];
            $newcomic->type = $comic['type']; --}}

        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">description</label>
            <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label">thumb</label>
            <input type="text" class="form-control" id="thumb" name="thumb">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">price</label>
            <input type="text" class="form-control" id="price" name="price">
        </div>

        <div class="mb-3">
            <label for="series" class="form-label">series</label>
            <input type="text" class="form-control" id="series" name="series">
        </div>

        <div class="mb-3">
            <label for="sale_date" class="form-label">sale_date</label>
            <input type="text" class="form-control" id="sale_date" name="sale_date">
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">type</label>
            <input type="text" class="form-control" id="type" name="type">
        </div>

        {{-- <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Tipologia</label>
            <input type="text" class="form-control" id="type" name="type">
        </div>

        <div class="mb-3">
            <label for="src" class="form-label">Immagine (url)</label>
            <input type="text" class="form-control" id="src" name="src">
        </div>

        <div class="mb-3">
            <label for="cooking-time" class="form-label">Tempo di cottura</label>
            <input type="text" class="form-control" id="cooking-time" name="cooking_time">
        </div>

        <div class="mb-3">
            <label for="weight" class="form-label">Peso</label>
            <input type="text" class="form-control" id="weight" name="weight">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
        </div> --}}

        <button type="submit" class="btn btn-primary">Save</button>


    </form>
</div>
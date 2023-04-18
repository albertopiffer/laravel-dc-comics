@extends('layouts.layout')

<a href="{{ route('comics.create') }}">CREATE</a>


<table class="index-table">

    <thead>
        <tr>
            <th>title</th>
            <th>description</th>
            <th>thumb</th>
            <th>price</th>
            <th>series</th>
            <th>sale_date</th>
            <th>type</th>
            <th>link</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($comics as $comic)
            <tr>
                <td>{{ $comic->title }}</td>
                <td>{{ $comic->description }}</td>
                <td><img src="{{ $comic->thumb }}" alt="" height="150"></td>
                <td>{{ $comic->price }}</td>
                <td>{{ $comic->series }}</td>
                <td>{{ $comic->sale_date }}</td>
                <td>{{ $comic->type }}</td>
                <td><a href="{{ route('comics.show', $comic->id) }}">
                    {{ $comic->title }}</a>
                </td>
            </tr>
        @endforeach

    </tbody>

</table>

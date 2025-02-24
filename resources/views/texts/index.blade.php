@extends('layouts.app')
@section('content')
    <form action="{{ route('texts.store') }}" method="POST">
        @csrf
        <textarea name="content" required></textarea>
        <button type="submit">Сохранить</button>
    </form>
    <table>
        @foreach($texts as $text)
            <tr>
                <td>{{ $text->content }}</td>
                <td><a href="{{ route('texts.export', $text->id) }}">Экспорт в PDF</a></td>
            </tr>
        @endforeach
    </table>
@endsection
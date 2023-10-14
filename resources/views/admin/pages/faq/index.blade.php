
@extends('admin.layout.app')

@section('title','Faq page')
@section('content')



        <a class="btn btn-danger mb-5" href="{{route('faq.create')}}">Add new FAQ</a>

        @if (session('message'))
            <div class="alert alert-success m-2 mb-2 p-0">{{session('message')}}</div>
        @endif
        <table class="table-bordered w-100">
        <thead class="text-center">
            <tr>
                <th>ID</th>
                <th>Question</th>
                <th>Answer</th>
                <th>option</th>
            </tr>
        </thead>
        <tbody class="text-center">
            @isset($faq)
                @forelse ($faq as $faq_question)
                    <tr>
                        <td>{{ $faq_question->id }}</td>
                        <td>{{ $faq_question->question }}</td>
                        <td>{{ $faq_question->answer }}</td>
                        <td>
                        <a href="{{route('faq.edit', $faq_question->id)}}" class="btn btn-primary custom-btn"><i class="fa fa-close"></i>Edit</a>
                        <form action="{{route('faq.destroy', $faq_question->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="delete" class="btn btn-danger">
                        </form>
                    </td>
                    </tr>
                @empty
                    <div class="alert alert-danger">There is no faq yet</div>
                @endforelse
            @endisset




        </tbody>
        </table>
@endsection

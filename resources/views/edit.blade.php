<x-app-layout css="{{asset('css/post.css')}}" js="{{asset('js/universal.js')}}">
    <header>
        <div>
            <h2>Edit Post | ID:{{$mypost->id}}</h2>
        </div>
        <ul>
            <li><a href="/">Back To Home</a></li>
        </ul>
    </header>
    <main>
        <x-forms.post action="{{ route('update', $mypost->id) }}" namevalue="{{$mypost->name}}" descvalue="{{$mypost->description}}"></x-forms.post>
    </main>
    
</x-app-layout>
<x-app-layout css="{{asset('css/post.css')}}" js="{{asset('js/universal.js')}}">
    <header>
        <div>
            <h2>Post</h2>
        </div>
        <ul>
            <li><a href="/">Back To Home</a></li>
        </ul>
    </header>
    <main>
        <x-forms.post action="{{route('store')}}" namevalue="{{old('name')}}" descvalue="{{old('description')}}"></x-forms.post>
    </main>
</x-app-layout>
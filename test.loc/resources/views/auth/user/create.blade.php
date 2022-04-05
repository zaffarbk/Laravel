@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="success">
            {{ session()->get('success') }}
        </div>
        <form action="{{route('user.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="inputEmail4">Почта</label>
                <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="Почта" required>
            </div>
            <div class="form-group">
                <label for="inputName">Имя</label>
                <input type="text" class="form-control" name="name" id="inputName" placeholder="Имя" required>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Сообщение</label>
                <textarea class="form-control" name="textarea" id="exampleFormControlTextarea1" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <input type="file" class="form-control-file mt-2" name="file" id="exampleFormControlFile1" required>
            </div>
            <button type="submit" class="btn btn-primary mt-2">Send</button>
        </form>
    </div>
@endsection
@extends('admin.layout.adminLayout')

@section('content')
    <form action="{{ route('education.update',$edu->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">BAŞLAMA TARİHİ</label>
            <input type="date" class="form-control" name="start_edu" value="{{$edu->start_edu}}">
        </div>
        <div class="mb-3">
            <label class="form-label">BİTİŞ TARİHİ</label>
            <input type="date" class="form-control" name="end_edu" value="{{$edu->end_edu}}">
        </div>
        <div class="mb-3">
            <label class="form-label">OKUL İSMİ</label>
            <input type="text" class="form-control" name="school_name" value="{{$edu->school_name}}">
        </div>
        <div class="mb-3">
            <label class="form-label">AÇIKLAMA</label>
            <input type="text" class="form-control" name="school_description" value="{{$edu->school_description}}">
        </div>

        <button type="submit" class="btn btn-primary">Güncelle</button>
    </form>
@endsection

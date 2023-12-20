@extends('admin.layout.adminLayout')

@section('content')
    <form action="{{ route('education.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">BAŞLAMA TARİHİ</label>
            <input type="date" class="form-control" name="start_edu">
        </div>
        <div class="mb-3">
            <label class="form-label">BİTİRME TARİHİ</label>
            <input type="date" class="form-control" name="end_edu">
        </div>
        <div class="mb-3">
            <label class="form-label">OKUL İSMİ</label>
            <input type="text" class="form-control" name="school_name">
        </div>
        <div class="mb-3">
            <label class="form-label">Açıklama</label>
            <input type="text" class="form-control" name="school_description">
        </div>

        <button type="submit" class="btn btn-primary">Ekle</button>
    </form>
@endsection

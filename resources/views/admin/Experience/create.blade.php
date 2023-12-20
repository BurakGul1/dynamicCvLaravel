@extends('admin.layout.adminLayout')

@section('content')
    <form action="{{ route('experience.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">BAŞLAMA TARİHİ</label>
            <input type="date" class="form-control" name="job_start">
        </div>
        <div class="mb-3">
            <label class="form-label">AYRILMA TARİHİ</label>
            <input type="date" class="form-control" name="job_finish">
        </div>
        <div class="mb-3">
            <label class="form-label">FİRMA İSMİ</label>
            <input type="text" class="form-control" name="company_name">
        </div>
        <div class="mb-3">
            <label class="form-label">Açıklama</label>
            <input type="text" class="form-control" name="job_description">
        </div>

        <button type="submit" class="btn btn-primary">Ekle</button>
    </form>
@endsection

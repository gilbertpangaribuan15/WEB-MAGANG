@extends('layouts.main')
@section('container')
@section('title','Course')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
              <h3>Buat Kursus</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('courses.store') }}" method="post">
                  @csrf
                    <div class="mb-3">
                      <label for="title" class="form-label">Judul</label>
                      <input type="text" class="form-control" id="title" name="title">
                    </div>
                    <div class="mb-3">
                      <label for="description" class="form-label">Deskripsi</label>
                      <textarea class="form-control" id="description" name="description"></textarea>
                    </div>
                    <div class="mb-3">
                      <label for="duration" class="form-label">Durasi</label>
                      <input type="text" class="form-control" id="duration" name="duration">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>
</div>
@endsection
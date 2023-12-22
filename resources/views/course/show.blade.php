@extends('layouts.main')
@section('container')
@section('title','Course')
{{-- <a href="{{ route('courses.create') }}" class="btn btn-primary">Buat Course</a> --}}
<div class="row">
  <div class="col-12 mb-3">
    <div class="card">
        <div class="card-header">
           Nama Kursus :  {{ $course->title }}
        </div>
        <div class="card-body">
           Deskripsi :  {{ $course->description }}
        </div>
        <div class="card-footer">
            Durasi : {{ $course->duration }}
        </div>
    </div>
  </div>
  <div class="col-12 text-end">
      <a href="{{ route('materials.create',$course->id) }}" class="btn btn-primary">Tambah Materi</a>
  </div>
</div>
<div class="row">
    <h4>Daftar Materi</h4>
    @foreach ($course->materials as $material)     
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-10">
                       Judul Materi :  {{ $material->title }}
                    </div>
                    <div class="col-2 d-flex justify-content-end">
                        <a href="{{ route('materials.edit',['course'=>$course->id,'material'=>$material->id]) }}" class="btn btn-warning">edit</a>
                        <form action="{{ route('materials.destroy',['course'=>$course->id,'material'=>$material->id]) }}" method="post">
                            @method('delete')
                            @csrf
                        <button class="btn btn-danger">Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card-body">
              Deskripsi :  {{ $material->description }}
            </div>
            <div class="card-footer">
                link :  <a href="{{ $material->link }}" target="blank">{{ $material->link }}</a>
                
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
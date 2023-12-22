@extends('layouts.main')
@section('container')
@section('title','Course')
<a href="{{ route('courses.create') }}" class="btn btn-primary mb-3">Buat Kursus</a>
<div class="row">
    @foreach ($courses as $course)       
    <div class="col-4">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-8">
                        {{ $course->title }}
                    </div>
                    <div class="col-4 d-flex align-items-end ">
                        <a href="{{ route('courses.edit',$course->id) }}" class="btn btn-warning">edit</a>
                        <form action="{{ route('courses.destroy',$course->id) }}" method="post">
                            @method('delete')
                            @csrf
                        <button class="btn btn-danger">Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card-footer text-end">
                <a href="{{ route('courses.show',$course->id) }}" class="btn btn-primary">lihat</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
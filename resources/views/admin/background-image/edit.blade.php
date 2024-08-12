@extends('layouts.admin.admin-base')
@section('content')
@livewire('admin\background-image.edit', ['id' => request()->route('id')])
@endsection

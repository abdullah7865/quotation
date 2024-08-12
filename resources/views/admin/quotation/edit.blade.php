@extends('layouts.admin.admin-base')
@section('content')
@livewire('admin.quotation.edit', ['id' => request()->route('id')])
@endsection

@extends('adminlte::page')


@section('content_header')
    <h1 class="m-0 text-dark">Solicitar vacaciones</h1>
@stop

@section('content')
<div>
    <div class="row">
        <x-adminlte-input name="name" label="Nombre" placeholder="Ingrese"
            fgroup-class="col-md-6" />
    </div>
    <div class="row">
        <x-adminlte-textarea name="description" label="Descripcion" 
        placeholder="Descripcion del etc"
        fgroup-class="col-md-6">
        </x-adminlte-textarea>
    </div>

    
    <div class="row">
        <x-adminlte-select name="type" label="Tipo" 
        fgroup-class="col-md-6">
    
    <x-slot name="prependSlot">
        <div class="input-group-text bg-gradient-info">
            <i class="far fa-calendar"></i>
        </div>
    </x-slot>
    <option>Seleccione una opción</option>
    <option>Salud</option>
    <option>Vacaciones</option>
    <option>Matrimonio</option>
    <option>Poltiicas o gremiales</option>
    <option>Otros</option>
</x-adminlte-select>

</div>
<div class="row">
    @php
$config = ['format' => 'YYYY-MM-DD'];
@endphp
<x-adminlte-input-date name="date" :config="$config" placeholder="Seleccionar fecha de inicio" label="Fecha de inicio"
fgroup-class="col-md-6">
    <x-slot name="prependSlot">
        <div class="input-group-text bg-gradient-info">
            <i class="fas fa-clock"></i>
        </div>
    </x-slot>
</x-adminlte-input-date>
@php
$config = ['format' => 'YYYY-MM-DD'];
@endphp
<x-adminlte-input-date name="date2" :config="$config" placeholder="Seleccionar fecha de finalización" label="Fecha de finalización"
fgroup-class="col-md-6">
    <x-slot name="prependSlot">
        <div class="input-group-text bg-gradient-info">
            <i class="fas fa-clock"></i>
        </div>
    </x-slot>
</x-adminlte-input-date>

</div>

<div class="row">
    <div class="form group col-md-6">
        <x-adminlte-button label="Solicitar" theme="primary" icon="fas fa-save"/>
    </div>
</div>
</div>
 
@stop
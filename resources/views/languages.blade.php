@extends('layouts.admin')

@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Traductor</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Inicio</a></li>
            <li class="breadcrumb-item active">Traductor</li>
            </ol>
        </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="container-fluid">
        <form method="POST" action="{{ route('translations.create') }}">
            @csrf
            <div class="row">
                <div class="col-md-4">
                    <label>Key:</label>
                    <input type="text" name="key" class="form-control" placeholder="Ingresar key...">
                </div>
                <div class="col-md-4">
                    <label>Valor:</label>
                    <input type="text" name="value" class="form-control" placeholder="Ingresar valor...">
                </div>
                <div class="col-md-4">
                    <button type="submit" class="btn btn-success">Agregar</button>
                </div>
            </div>
        </form>
    
    
        <table class="table table-hover table-bordered table-lang">
            <thead>
            <tr>
                <th>Key</th>
                @if($languages->count() > 0)
                    @foreach($languages as $language)
                        <th>{{ $language->name }}({{ $language->code }})</th>
                    @endforeach
                @endif
                <th width="80px;">Acción</th>
            </tr>
            </thead>
            <tbody>
                @if($columnsCount > 0)
                    @foreach($columns[0] as $columnKey => $columnValue)
                        <tr>
                            <td><a href="#" class="translate-key" data-title="Ingresar Traducción" data-type="text" data-pk="{{ $columnKey }}" data-url="{{ route('translation.update.json.key') }}">{{ $columnKey }}</a></td>
                            @for($i=1; $i<=$columnsCount; ++$i)
                            <td><a href="#" data-title="Ingresar Traducción" class="translate" data-code="{{ $columns[$i]['lang'] }}" data-type="textarea" data-pk="{{ $columnKey }}" data-url="{{ route('translation.update.json') }}">{{ isset($columns[$i]['data'][$columnKey]) ? $columns[$i]['data'][$columnKey] : '' }}</a></td>
                            @endfor
                            <td><button data-action="{{ route('translations.destroy', $columnKey) }}" class="btn btn-danger btn-xs remove-key">Eliminar</button></td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
    </div>
@endsection
<?php $title = isset($item) ? $item->name: "add new category" ?>
{!! Form::myInput('text', 'name', 'Name', ['required']) !!}
{!! Form::myInput('text', 'email', 'Email', ['required']) !!}
{!! Form::myInput('text', 'nik', 'NIK', ['required']) !!}
{!! Form::myInput('text', 'address', 'Address', ['required']) !!}

    {!! Form::label('categories_id', 'Category', ['class' => 'chosen']) !!}
        {!! Form::select('categories_id', $kategori, null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'chosen']) !!}

        {!! $errors->first('categories_id', '<p class="help-block">:message</p>') !!}

{!! Form::myInput('text', 'book_name', 'Book Name', ['required']) !!}



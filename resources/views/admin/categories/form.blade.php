<?php $title = isset($item) ? $item->name: "add new category" ?>
{!! Form::myInput('text', 'name', 'Name', ['required']) !!}

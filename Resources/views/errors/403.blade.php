@extends('pub_theme::errors.illustrated-layout')

@section('title', __('Forbidden'))
@section('code', '403')
@section('message', $msg ?? $message ?? __('Forbidden'))
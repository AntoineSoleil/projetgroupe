@extends('layouts.app')

@section('content')
<ul class="collapsible popout" data-collapsible="accordion">
    <li>
      <div class="collapsible-header"><i class="material-icons">filter_drama</i>First - 4 décembre 2015</div>
      <div class="collapsible-body">
        <div class="row">
        <img src="{{ asset('img/pomme.jpg') }}" alt="actualite1" class="col m4" />
          <p class="col m8">Lorem ipsum dolor sit amet.</p>
        </div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">filter_drama</i>First - 4 décembre 2015</div>
      <div class="collapsible-body">
        <div class="row">
        <img src="{{ asset('img/pomme.jpg') }}" alt="actualite1" class="col m4" />
          <p class="col m8">Lorem ipsum dolor sit amet.</p>
        </div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">filter_drama</i>First - 4 décembre 2015</div>
      <div class="collapsible-body">
        <div class="row">
        <img src="{{ asset('img/pomme.jpg') }}" alt="actualite1" class="col m4" />
          <p class="col m8">Lorem ipsum dolor sit amet.</p>
        </div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">filter_drama</i>First - 4 décembre 2015</div>
      <div class="collapsible-body">
        <div class="row">
        <img src="{{ asset('img/pomme.jpg') }}" alt="actualite1" class="col m4" />
          <p class="col m8">Lorem ipsum dolor sit amet.</p>
        </div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">filter_drama</i>Second</div>
      <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
      <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
    </li>
  </ul>
  @endsection
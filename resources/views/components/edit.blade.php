@extends('layouts/default')

{{-- Page title --}}
@section('title')
    @if ($item->id)
        {{ trans('admin/components/general.update') }}
    @else
        {{ trans('admin/components/general.create') }}
    @endif
@parent
@stop

@section('header_right')
<a href="{{ URL::previous() }}" class="btn btn-primary pull-right">
  {{ trans('general.back') }}
</a>
@stop


{{-- Page content --}}
@section('content')


<div class="row">
  <div class="col-md-8 col-md-offset-2">

    <form class="form-horizontal" method="post" autocomplete="off">
    {{ csrf_field() }}
    <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">
            @if ($item->id)
              {{ $item->name }}
            @endif
          </h3>
          <div class="box-tools pull-right">
            <button class="slideout-menu-toggle btn btn-box-tool btn-box-tool-lg" data-toggle="tooltip" title="Help"><i class="fa fa-question"></i></button>
          </div>
        </div><!-- /.box-header -->

       <div class="box-body">

        @include ('partials.forms.edit.name', ['translated_name' => trans('admin/components/table.title')])
        @include ('partials.forms.edit.category')
        @include ('partials.forms.edit.quantity')
        @include ('partials.forms.edit.minimum_quantity')
        @include ('partials.forms.edit.serial')
        @include ('partials.forms.edit.company')
        @include ('partials.forms.edit.location')
        @include ('partials.forms.edit.order_number')
        @include ('partials.forms.edit.purchase_date')
     	@include ('partials.forms.edit.purchase_cost')
      </div>
      @include ('partials.forms.edit.submit')
    </div>

  </div>
</div>


<div class="slideout-menu">
  <a href="#" class="slideout-menu-toggle pull-right">×</a>
	<h3>
    {{ trans('admin/components/general.about_components_title') }}
  </h3>
	<p>{{ trans('admin/components/general.about_components_text') }}</p>
</div>



@stop

@extends('backend/layouts/default')

{{-- Page title --}}
@section('title')
@choice('general.location',1) : {{ $location->name }} ::
@parent
@stop

{{-- Page content --}}
@section('content')

<div class="row header">
    <div class="col-md-12">
        <div class="btn-group pull-right">
            <button class="btn gray">@lang('button.actions')</button>
            <button class="btn glow dropdown-toggle" data-toggle="dropdown">
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">    
                <li><a href="{{ route('update/location', $location->id) }}">@lang('admin/locations/general.edit')</a></li>
               
            </ul>
        </div>
       <h3 class="name">{{ $location->name }}</h3>
    </div>
</div>

<div class="user-profile">
<div class="row profile">
<div class="col-md-9 bio">

 
                <!-- checked out assets table -->
                <h6>@choice('general.user', $location->has_users())
                    @if($location->has_users() > 0) 
                        : ( {{ $location->has_users() }} ) 
                    @endif </h6>
               <div class="row-fluid table users-list">
<table id="example">
    <thead>
        <tr role="row">
            <th class="col-md-3">@lang('admin/users/table.name')</th>
            <th class="col-md-2">@lang('admin/users/table.email')</th>
            <th class="col-md-2">@lang('admin/users/table.manager')</th>
            <th class="col-md-1">@lang('general.assets')</th>
            <th class="col-md-1">@lang('general.licenses')</th>
            <th class="col-md-1">@lang('admin/users/table.activated')</th>
            
        </tr>
    </thead>
    <tbody>
        @if($location->has_users() > 0)
        @foreach ($location->users as $user)
        <tr>
            <td>
            <img src="{{ $user->gravatar() }}" class="img-circle avatar hidden-phone" style="max-width: 45px;" />
            <a href="{{ route('view/user', $user->id) }}" class="name">{{{ $user->fullName() }}}</a>

            </td>
            <td>{{ HTML::mailto($user->email) }}</td>
            <td>
            @if ($user->manager) 
                <a href="{{ route('view/user', $user->manager->id) }}" class="name">{{{ $user->manager->fullName() }}}                
            @endif
            </td>
            <td>{{{ $user->assets->count() }}}</td>
            <td>{{{ $user->licenses->count() }}}</td>
            <td>{{ $user->isActivated() ? '<i class="icon-ok"></i>' : ''}}</td>
           

           
        </tr>
        @endforeach
        @endif
    </tbody>
</table>
</div>
                <br>             
        </div>

        <!-- side address column -->
        <div class="col-md-3 col-xs-12 address pull-right">
        <h6><br>@lang('general.moreinfo'):</h6>
            <table>
                    <tr>
                        <td><strong>@lang('general.name'):</strong></td>
                        <td> {{ $location->name }}</td>
                    </tr>
                    @if($location->entity)
                    <tr>
                        <td><strong>@lang('general.entity'):</strong></td>
                        <td><a href="{{ route('view/entity', $location->entity->id) }}" class="name">{{{ $location->entity->common_name }}}</a></td></tr>
                    @endif
                    @if($location->address)
                    <tr>
                        <td><strong>@lang('general.address'):</strong></td><td> {{$location->address }}</td>
                    </tr>
                    @endif
                    @if($location->address2)
                    <tr>
                        <td>&nbsp;</td>
                        <td>{{$location->address2 }}</td></tr>
                    @endif
                    
                    @if($location->city)
                    <tr><td><strong>@lang('general.city'):</strong></td><td> {{$location->city }}</td></tr>
                    @endif
                     @if($location->state)
                    <tr><td><strong>@lang('general.state'):</strong></td><td> {{$location->state }}</td></tr>
                    @endif
                    @if($location->country)
                    <tr><td><strong>@lang('general.country'):</strong></td><td> {{$location->country }}</td></tr>
                    @endif
                     @if($location->zip)
                    <tr><td><strong>@lang('general.zip'):</strong></td><td> {{$location->zip }}</td></tr>
                    @endif
                </table>
        </div>
    </div>
</div>
@stop

@extends('layouts.app')


@section('content')
    <div class="page-body">
        <div class="row">
            <div class="col-lg-12">

                @if(Session::has('flash_message'))
                    <div class="alert alert-success">
                        {{ Session::get('flash_message') }}
                    </div>
                @endif
                @foreach($settings as $setting)
                    <p><a class="btn btn-labeled shiny btn-warning btn-large" href="/admin/settings/{{ $setting->id }}/edit"> <i
                                    class="btn-label fa fa-plus"></i>Settings </a></p>
                @endforeach
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="widget">
                    <div class="widget-header bordered-bottom bordered-themesecondary">
                        <i class="widget-icon fa fa-tags themesecondary"></i>
                        <span class="widget-caption themesecondary">Main url</span>
                    </div><!--Widget Header-->
                    <div class="widget-body  no-padding">
                        <div class="tickets-container">
                            @foreach($settings as $setting)
                                {{ $setting->mainurl }}
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="widget">
                    <div class="widget-header bordered-bottom bordered-themesecondary">
                        <i class="widget-icon fa fa-tags themesecondary"></i>
                        <span class="widget-caption themesecondary">Title</span>
                    </div><!--Widget Header-->
                    <div class="widget-body  no-padding">
                        <div class="tickets-container">
                            @foreach($settings as $setting)
                                {{ $setting->title }}
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="widget">
                    <div class="widget-header bordered-bottom bordered-themesecondary">
                        <i class="widget-icon fa fa-tags themesecondary"></i>
                        <span class="widget-caption themesecondary">Email address</span>
                    </div><!--Widget Header-->
                    <div class="widget-body  no-padding">
                        <div class="tickets-container">
                            @foreach($settings as $setting)
                                {{ $setting->email }}
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="widget">
                    <div class="widget-header bordered-bottom bordered-themesecondary">
                        <i class="widget-icon fa fa-tags themesecondary"></i>
                        <span class="widget-caption themesecondary">Address</span>
                    </div><!--Widget Header-->
                    <div class="widget-body  no-padding">
                        <div class="tickets-container">
                            @foreach($settings as $setting)
                                {{ $setting->address }}
                            @endforeach
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="widget">
                    <div class="widget-header bordered-bottom bordered-themesecondary">
                        <i class="widget-icon fa fa-tags themesecondary"></i>
                        <span class="widget-caption themesecondary">Logo</span>
                    </div><!--Widget Header-->
                    <div class="widget-body  no-padding">
                        <div class="tickets-container">
                            @foreach($settings as $setting)
                                <img src="/assets/img/logo/{{ $setting->logo }}" class="img-responsive"/>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="widget">
                    <div class="widget-header bordered-bottom bordered-themesecondary">
                        <i class="widget-icon fa fa-tags themesecondary"></i>
                        <span class="widget-caption themesecondary">Meta description</span>
                    </div><!--Widget Header-->
                    <div class="widget-body  no-padding">
                        <div class="tickets-container">
                            @foreach($settings as $setting)
                                {!! $setting->description !!}
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="widget">
                    <div class="widget-header bordered-bottom bordered-themesecondary">
                        <i class="widget-icon fa fa-tags themesecondary"></i>
                        <span class="widget-caption themesecondary">Phone</span>
                    </div><!--Widget Header-->
                    <div class="widget-body  no-padding">
                        <div class="tickets-container">
                            @foreach($settings as $setting)
                                {{ $setting->phone }}
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="widget">
                    <div class="widget-header bordered-bottom bordered-themesecondary">
                        <i class="widget-icon fa fa-tags themesecondary"></i>
                        <span class="widget-caption themesecondary">Facebook</span>
                    </div><!--Widget Header-->
                    <div class="widget-body  no-padding">
                        <div class="tickets-container">
                            @foreach($settings as $setting)
                                @if($setting->facebook != NULL)
                                    {{ $setting->facebook }}

                                @else
                                    n/a
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="widget">
                    <div class="widget-header bordered-bottom bordered-themesecondary">
                        <i class="widget-icon fa fa-tags themesecondary"></i>
                        <span class="widget-caption themesecondary">Мапа</span>
                    </div><!--Widget Header-->
                    <div class="widget-body  no-padding">
                        <div class="tickets-container">
                            <div id="map-canvas"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="widget">
                    <div class="widget-header bordered-bottom bordered-themesecondary">
                        <i class="widget-icon fa fa-tags themesecondary"></i>
                        <span class="widget-caption themesecondary">Twitter</span>
                    </div><!--Widget Header-->
                    <div class="widget-body  no-padding">
                        <div class="tickets-container">
                            @foreach($settings as $setting)
                                @if($setting->twitter != NULL)
                                    {{ $setting->twitter }}

                                @else
                                    n/a
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="widget">
                    <div class="widget-header bordered-bottom bordered-themesecondary">
                        <i class="widget-icon fa fa-tags themesecondary"></i>
                        <span class="widget-caption themesecondary">Skype</span>
                    </div><!--Widget Header-->
                    <div class="widget-body  no-padding">
                        <div class="tickets-container">
                            @foreach($settings as $setting)
                                @if($setting->skype != NULL)
                                    {{ $setting->skype }}

                                @else
                                    n/a
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="widget">
                    <div class="widget-header bordered-bottom bordered-themesecondary">
                        <i class="widget-icon fa fa-tags themesecondary"></i>
                        <span class="widget-caption themesecondary">LinkedIn</span>
                    </div><!--Widget Header-->
                    <div class="widget-body  no-padding">
                        <div class="tickets-container">
                            @foreach($settings as $setting)
                                @if($setting->linkedin != NULL)
                                    {{ $setting->linkedin }}

                                @else
                                    n/a
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="widget">
                    <div class="widget-header bordered-bottom bordered-themesecondary">
                        <i class="widget-icon fa fa-tags themesecondary"></i>
                        <span class="widget-caption themesecondary">Google Plus</span>
                    </div><!--Widget Header-->
                    <div class="widget-body  no-padding">
                        <div class="tickets-container">
                            @foreach($settings as $setting)
                                @if($setting->gplus != NULL)
                                    {{ $setting->gplus }}

                                @else
                                    n/a
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="widget">
                    <div class="widget-header bordered-bottom bordered-themesecondary">
                        <i class="widget-icon fa fa-tags themesecondary"></i>
                        <span class="widget-caption themesecondary">Youtube</span>
                    </div><!--Widget Header-->
                    <div class="widget-body  no-padding">
                        <div class="tickets-container">
                            @foreach($settings as $setting)
                                @if($setting->youtube != NULL)
                                    {{ $setting->youtube }}

                                @else
                                    n/a
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="widget">
                    <div class="widget-header bordered-bottom bordered-themesecondary">
                        <i class="widget-icon fa fa-tags themesecondary"></i>
                        <span class="widget-caption themesecondary">Flickr</span>
                    </div><!--Widget Header-->
                    <div class="widget-body  no-padding">
                        <div class="tickets-container">
                            @foreach($settings as $setting)
                                @if($setting->flickr != NULL)
                                    {{ $setting->flickr }}

                                @else
                                    n/a
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="widget">
                    <div class="widget-header bordered-bottom bordered-themesecondary">
                        <i class="widget-icon fa fa-tags themesecondary"></i>
                        <span class="widget-caption themesecondary">Pinterest</span>
                    </div><!--Widget Header-->
                    <div class="widget-body  no-padding">
                        <div class="tickets-container">
                            @foreach($settings as $setting)
                                @if($setting->pinterest != NULL)
                                    {{ $setting->pinterest }}

                                @else
                                    n/a
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="widget">
                    <div class="widget-header bordered-bottom bordered-themesecondary">
                        <i class="widget-icon fa fa-tags themesecondary"></i>
                        <span class="widget-caption themesecondary">Last updated</span>
                    </div><!--Widget Header-->
                    <div class="widget-body  no-padding">
                        <div class="tickets-container">
                            @foreach($settings as $setting)
                                {{ $setting->updated_at->diffForHumans() }}
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

    @section('scripts')
        <!-- Google Maps -->
            <script type="text/javascript"
                    src="http://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyAS05zxYcZTGI-KfGAk8l0xNC2eCWfNsPw"></script>

            <script>
                @foreach($settings as $setting)

                        $(document).ready(function () {
// Google Maps

                    map = new google.maps.Map(document.getElementById('map-canvas'), {
                        center: {lat: {{ $setting->lat }}, lng: {{ $setting->lng }} },
                        zoom: 15
                    });

                    var marker = new google.maps.Marker({
                        position: {lat: {{ $setting->lat }}, lng: {{ $setting->lng }} },
                        map: map,
                        draggable: false
                    });

                });
                @endforeach
            </script>
@endsection
<?php
use Carbon\Carbon;
?>
<x-postlayout>
        <div class="seller-dash-v2 leads crm-page">

            <div class="container-fluid px-0">
                <div class="row no-gutters">

                    <div class="col-12 col-md leads-and-responses ">
                        <div class="row no-gutters">
                            <div class="dashboard-projects col-12 col-md-5 col-lg-4 col-xl projects-column fixed-height-column overflow-auto scroll-touch leads-list-container border-right" id="dashboard-projects" style="max-height: 543px;">
                                <div class="all-projects-header sticky-top text-xs">
                                    <div class="row no-gutters px-4 pl-xl-5 py-3">
                                        <div class="col-8">
                                            <div class="results-count-filter">Showing all 10 out of {{$posts->total()}} requests</div>
                                        </div>
                                        <div class="col-4">
                                            <div x-data="{ open: false }" style = "position:relative; " class="d-flex filter-mobile filter-icon-wrapper justify-content-end fresh-filter-row">
                                                <span class="bark-svg-icon bsi-primary-primary">
                                                    <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                        <title>filter</title>
                                                        <desc>Created with Sketch.</desc>
                                                        <g id="filter" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <g id="baseline-filter_list-24px">
                                                                <polygon id="Path" points="0 0 24 0 24 24 0 24"></polygon>
                                                                <path d="M10,18 L14,18 L14,16 L10,16 L10,18 Z M3,6 L3,8 L21,8 L21,6 L3,6 Z M6,13 L18,13 L18,11 L6,11 L6,13 Z" id="Shape" class="primary-color" fill-rule="nonzero"></path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <a role="button" @click="open=!open" class="filter-mobile link pl-2">Filter</a>

                                                <div x-show="open"  style = "position:absolute; top: 35px; display:block; background: white;" @click.outside="open = false">
                                                    <ul style="padding: 0px!important;">
                                                        @foreach ($categories as $category)
                                                            <a href="/posts/?category={{$category->slug}}">
                                                                <li style="list-style:none;">
                                                                    {{$category->name}}
                                                                </li>
                                                            </a>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style= "display:flex; justify-content:center;">
                                        {{ $posts->links() }}

                                    </div>
                                </div>

                                <div class="items">
                                    @foreach ($posts as $post)
                                        <x-postdesc>
                                            <x-slot name="title">
                                                {{$post->name}}
                                            </x-slot>
                                            <x-slot name="time">
                                                {{Carbon::create($post->created_at)->diffForHumans()}}
                                            </x-slot>
                                            <x-slot name="category">
                                                {{$post->category->name}}
                                            </x-slot>
                                            <x-slot name="country">
                                                {{$post->user->city}}
                                            </x-slot>
                                        </x-postdesc>
                                    @endforeach
                                </div>
                            </div>
                            <!-- Right panel  -->
                            <div class="col-12 col-md-7 col-lg right-panel fixed-height-column overflow-auto scroll-touch h-100 d-block" style="max-height: 543px;">
                                <div class="right-panel-wrapper ml-lg-4">

                                    <div class="dashboard-project-details h-100" id="dashboard-project-details" data-project-id="22288043" style="margin: 0px 0px 0px auto; opacity: 1; display: block;">
                                        <div class="project-details-project-container" style="display: block; opacity: 1;">
                                            <x-detailedinformation>
                                                <x-slot name="time">
                                                    {{Carbon::create($post->created_at)->diffForHumans()}}
                                                </x-slot>
                                                <x-slot name="name">
                                                    {{$post->name}}
                                                </x-slot>
                                                <x-slot name="profession">
                                                    {{$post->profession}}
                                                </x-slot>
                                                <x-slot name="location">
                                                    {{$post->user->city}}
                                                </x-slot>
                                                <x-slot name="email">
                                                    {{$post->user->email}}
                                                </x-slot>
                                                <x-slot name="telephone">
                                                    {{$post->user->telephone}}
                                                </x-slot>
                                            </x-detailedinformation>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-postlayout>

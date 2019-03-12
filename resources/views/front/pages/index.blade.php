@extends('front.layouts.master')

@section('posts')



<div class="container">
        <div class="row">
            <div class="col-md-8">
               {{-- /article --}}
               @include('front.pages.article')
            </div>
            <div class="col-md-4">
                <aside class="right-sidebar">
                   {{-- search --}}
                   @include('front.pages.search')

                    <div class="widget">
                       {{-- category --}}
                       @include('front.pages.category')
                    </div>

                    <div class="widget">
                       {{-- popular post --}}
                       @include('front.pages.popularpost')
                    </div>

                    <div class="widget">
                        {{-- tag --}}
                        @include('front.pages.tag')
                        
                    </div>
                </aside>
            </div>
        </div>
    </div>

    @stop

    @section('script')

    <script>
    alert('hello');
    </script>

    @stop

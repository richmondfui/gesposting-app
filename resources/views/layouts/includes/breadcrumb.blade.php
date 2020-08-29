<div class="custom-breadcrumns border-bottom">
     <div class="container">
         <a href="{{url('/')}}">Home</a>
         <span class="mx-3 icon-keyboard_arrow_right"></span>
        @if(isset($main))
     <a href="{{route('posting')}}">{{$main}}</a>
          <span class="mx-3 icon-keyboard_arrow_right"></span>
        @endif
         <span class="current">{{$page}}</span>
     </div>
 </div>
<div class="textWithImage {{isset($textColor) ? 'withoutImage' : ''}}"
     style="background-color: {{$backColor ?? ''}}" itemscope>
    @if(isset($leftNoticeText))
        <div class="leftNotice" style="color: {{isset($textColor) ? $textColor : ''}}">
            <p>Scroll to explore</p>
            <div class="line" style="background-color: {{isset($textColor) ? $textColor : ''}}"></div>
            <p>{{$leftNoticeText}}</p>
        </div>
    @endif
    <div  itemprop="page-notice" class="textContent {{$animationClass ?? ''}} {{isset($image) ? 'imageBackground' : ''}}"
       style="background-image: url('{{$image ?? ''}}');-webkit-text-fill-color: {{$textColor ?? ''}}">
        {!! $text !!}
    </div>
</div>

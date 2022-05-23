<div class="explorePhilosophy">
    <div>
        <div class="explorePhilosophyLeft">
            <ul class="desktopList" itemscope>
                @foreach($list as $index=>$item)
                    <li itemprop="explore-philosophy-text-desktop"
                        class="text{{$index}}">{!! str_replace('<p>','<p class="textForAnimation">',$item) !!}</li>
                @endforeach
            </ul>
            <ul class="mobileList" itemscope>
                <div class="textForAnimation">
                    @foreach($mobileList as $index=>$item)
                        <li itemprop="explore-philosophy-text-mobile">{!! $item !!}</li>
                    @endforeach
                </div>
            </ul>
        </div>
        <div class="explorePhilosophyRight" itemscope>
            @foreach($images as $image)
                <div itemprop="explore-philosophy-image-item"
                     class="explorePhilosophyRightImage brownLayer {{count($images) === 1 ? 'singleImage' : ''}}"
                     style="background-image: url('{{$image}}')"></div>
            @endforeach
        </div>
    </div>
    <a class="linkItem" href="{{$link}}">{{$linkText}}</a>
</div>

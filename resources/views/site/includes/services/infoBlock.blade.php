<div class="infoBlock" itemscope>
    @foreach($data as $index=>$item)
        <div class="infoBlockItem" itemprop="information-block">
            <div class="infoBlockItemLeft">
                <h2 itemprop="information-block-title" class="{{ 'serviceSection'.$index }}">{{$item['title']}}</h2>
                <div class={{ "animateBlockserviceSection".$index }}>
                    <p class="textForAnimation" itemprop="information-block-description">{!! $item['text'] !!}</p>
                </div>
                {{--                <a href="#" class="linkItem">Learn more</a>--}}
            </div>
            <div itemprop="information-block-image" class="infoBlockItemRight" style="background-image: url('{{$item['image']}}')"></div>
        </div>
    @endforeach
</div>

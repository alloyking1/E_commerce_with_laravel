 <div>
    <a href="/categories/{{$each->slug}}" class="{{$each->depth === 0 ? 'font-bold' : ''}}">{{$each->title}}</a>
        <div class="ml-4">
             @foreach($each->children as $child)
                <x-category :each="$child"/>
            @endforeach
        </div>
       
    
</div>
 <div>
    {{$each->title}}
        <div class="ml-4">
             @foreach($each->children as $child)
                <x-category :each="$child"/>
            @endforeach
        </div>
       
    
</div>
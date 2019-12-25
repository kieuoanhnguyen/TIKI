<div class="d-flex flex-row">
    <div class="col-3">
        <ul class="list-group" id="menu">
            <li href="#" class="list-group-item menu1 active">
                Menu
            </li>

            @foreach($categories as $category)
            @if(empty($category->parent_category))
            <div class="menu">
                <li href="#" class="list-group-item menu1">
                <a href="{{route('viewListProduct',[
                'category'=>$category->slug
                ])}}">{{$category->name}}</a>
                </li>
                <ul>
                @foreach($category->child_category as $item) 
                    <li class="list-group-item">
                    <a href="{{route('viewListProduct',[
                        'category'=>$item->slug
                    ])}}">{{$item->name}}</a>
                    </li>
                @endforeach
                </ul>   
            </div>
            @endif
            @endforeach  
             
            
        </ul>
    </div>
    <!-- slider -->
    <div class="col-9">
        <script>
            if (document.images) {
                var image1 = new Image();
                image1.src = "/images/images.jpg";
                var image2 = new Image();
                image2.src = "/images/images6.jpeg";
            }
        </script>
        <a href="#" onMouseOver="document.myImage.src=image2.src;" onMouseOut="document.myImage.src=image1.src;">
            <img name="myImage" src="/images/images.jpg" width="700px" height="357px" />
        </a>
    </div>
</div>
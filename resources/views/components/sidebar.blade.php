<div class="col-sm-3">
    <div class="left-sidebar">
        <h2>Category</h2>
        <div class="panel-group category-products" id="accordian"><!--category-productsr-->

            @foreach($categories as $category)
            <div class="panel panel-default">
                {{-- Cha --}}
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordian" href="#{{ $category->name }}">
                            <span class="badge pull-right">
                                @if($category->categoryChildren->count())
                                <i class="fa fa-plus"></i>
                                @endif
                            </span>
                            {{ $category->name }}
                        </a>
                    </h4>
                </div>

                {{-- Con --}}
                <div id="{{ $category->name }}" class="panel-collapse collapse">
                    <div class="panel-body">
                        <ul>
                            @foreach($category->categoryChildren as $categoryChildrenItem)
                            <li><a href="#">{{ $categoryChildrenItem->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach

        </div><!--/category-products-->

    </div>
</div>

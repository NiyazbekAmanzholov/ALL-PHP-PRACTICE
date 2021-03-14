@extends('layouts.app')

@section('content')
<div class="container-fluid main ">

    <div class="album py-5 bg-light header ">
    <div class="row rowContainer">

<!---filter-->
        <div class="col-md-3">
          <div class="card mb-4 shadow-sm">
            <div class="card-body rowBlock">

<div><h6>Поиск по параметрам:</h6></div>
      <form method="get" action="/" >

                Сортировка по цене:
                <select class="form-control mr-sm-2" name="PriceSort">
                <option></option>
                <option>По убыванию</option>
                <option>По возростанию</option>
                </select>

                Сортировка по дате:
                <select class="form-control mr-sm-2" name="DateSort">
                <option></option>
                <option>По убыванию</option>
                <option>По возростанию</option>
                </select>                

                <label for="price_from">Цена от
                    <input type="text" class="form-control mr-sm-2" id="price_from" name="price_from" size="6" value="{{request()->price_from}}">
                </label>
                <label for="price_to">до
                    <input type="text" class="form-control mr-sm-2" id="price_to" name="price_to" size="6" value="{{request()->price_to}}">
                </label> kzt 

                Поиск по ключевому слову: <input type="text" class="form-control mr-sm-2" style="width: 100%;" name="title" value="{{request()->title}}" placeholder="Введите слово">


                Вид акции:
                <select class="form-control mr-sm-2" name="list">
                <option></option>
                <option>hit</option>
                <option>new</option>
                <option>sale</option>
                </select>

                Категория товаров:
                <select id="category_id" class="form-control" name="category">
                <option></option>
                @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->category}}</option>
                @endforeach
                </select> 

                Brand:
                <select class="form-control mr-sm-2 bottom" name="brand">
                <option></option>
                <option value="Samsung">Samsung</option>
                <option value="iPhone">iPhone</option>
                <option value="LG">LG</option>
                <option value="Asus">Asus</option>
                <option value="Simens">Simens</option>
                <option value="Lenovo">Lenovo</option>
                <option value="Nokia">Nokia</option>
                </select>
             
            <button type="submit" class="btn btn-outline-success my-2 my-sm-0">Поиск</button>    
            <a href="{{ url('/') }}" class="btn btn-outline-danger my-2 my-sm-0">Сброс</a>                       
                                                                
        </form>

            </div>
          </div>
            <div id="holder">
                <div class="box2">
                    <div class="side1"><img src="https://www.technodom.kz/media/catalog/product/cache/1366e688ed42c99cd6439df4031862c6/6/b/6baea98ebd8f90886e85a3042b4629ddd155acf5_15500247498782.jpg" /></div>
                    <div class="side2"><img src="https://www.technodom.kz/media/catalog/product/cache/1366e688ed42c99cd6439df4031862c6/6/2/62da4c16feaddc0df74df20acb7a79c9048bde82_190042_1.jpg" /></div>
                    <div class="side3"><img src="https://www.technodom.kz/media/catalog/product/cache/1366e688ed42c99cd6439df4031862c6/9/f/9fedf451d4391f0af1693755b3cedb728dbaa653_16845202128926.jpg" /></div>
                    <div class="side4"><img src="https://www.technodom.kz/media/catalog/product/cache/1366e688ed42c99cd6439df4031862c6/5/b/5b8d4171733bbe950df468709bc63c54882f6297_64047_1m.jpg" /></div>
                    <div class="side5"><img src="https://www.technodom.kz/media/catalog/product/cache/1366e688ed42c99cd6439df4031862c6/b/b/bb02f7511125aa78169d52631edbc352fcc195dd_15865407471646.jpg" /></div>
                    <div class="side6"><img src="https://www.technodom.kz/media/catalog/product/cache/1366e688ed42c99cd6439df4031862c6/e/d/edbc0bf0c54fb8e29f981f7356f1378a4210a4b5_14487497375774.jpg" /></div>
                </div>
            </div>
        </div>
<!---filter-end-->

        <div class="col-md-8">
          <div class="card mb-4 shadow-sm">
            <div class="card-body">
                <div class="row">   

            <!---Products-->
                    @foreach($products as $product)
                    <div class="col-md-4">
                      <div class="card mb-2 shadow-sm">
                        <div class="btn btn-danger sale" >{{$product->field}}</div>
                        @if($product->image != 'img')
                        <img src="{{$product->image}}" class="img-style" alt="...">           
                        @else
                        <img src="https://a.allegroimg.com/original/038291/e462962d4d808eb1a0c4e6bb5ca8" class="img-style" alt="...">  
                        @endif

                        <div class="card-body">
                            <strong class="rowContainer">{{$product->title}}</strong>
                            <p class="rowContainer">{{$product->price}} kzt</p>                
                          <p class="card-text">{{str_limit($product->description,40)}}</p>
                          <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group" style="margin-right: 2%;">
                              <a href="/page/{{$product->id}}" class="btn btn-outline-info font-size">Подробнее</a>
                                <form action="/indexAdd/{{ $product->id }}" method="post">
                                    {{ csrf_field() }} 
                                    @guest
                                    <a href="/addToBasket/{{ $product->id }}" class="btn btn-outline-success font-size">В корзину</a>
                                    @else
                                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                    <button class="btn btn-outline-primary font-size">В корзину</button>
                                    @endguest
                                </form>  
                            </div>
                          </div>
                            <div class="items">
                                    @guest
                                <a href="/disAuth/" class="space_between margin_left margin_left_minus"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                    @else                                
                                <a href="/wish/{{ $product->id }}" class="space_between margin_left margin_left_minus"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                    @endguest
                                <p class="space_between"><p style="margin-top: -5%;">{{$product->views}}</p><i class="fa fa-eye" aria-hidden="true"></i></p>
                            </div>   
                        </div>
                      </div>
                    </div>   
                    @endforeach  
            <!---Products-end-->
                </div> 
            </div>          
          </div>
            {{$products->render("pagination::bootstrap-4")}}            
        </div>       
    </div>
</div>


@endsection



@extends('layouts.adminLayout')

@section('content')

<div class="card-body">    
    
 <div class="rowContainer"><h5>Редактировать товар</h5></div>  
   <div class="row rowContainer"> 
        <div class="col-md-8 form rowBlock header main">

            <form class="form-horizontal" method="POST" action="/admin/product/edit/{{$product->id}}" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div style="padding-top: 3%;" class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                    <label for="title" class="col-md-4 control-label">Название</label>

                    <div class="col-md-12">
                        <input id="title" type="text" class="form-control" name="title" value="{{$product->title}}" required autofocus>
                        @if ($errors->has('title'))
                            <span class="help-block">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">
                    <label for="category_id" class="col-md-4 control-label">Добавить категорию</label>

                    <div class="col-md-12">

                        <select id="category_id" class="form-control" name="category_id">
                        <option></option>
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->category}}</option>
                        @endforeach
                        </select>                                

                        @if ($errors->has('category_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('category_id') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>



                <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                    <label for="price" class="col-md-4 control-label">Цена</label>

                    <div class="col-md-12">
                        <input id="price" type="text" class="form-control" name="price" value="{{$product->price}}" required>

                        @if ($errors->has('price'))
                            <span class="help-block">
                                <strong>{{ $errors->first('price') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>


                <div class="form-group{{ $errors->has('field') ? ' has-error' : '' }}">
                    <label for="field" class="col-md-4 control-label">Вид продажи</label>

                    <div class="col-md-12">
                        <input id="field" type="text" class="form-control" name="field" value="{{$product->field}}" required>

                        @if ($errors->has('field'))
                            <span class="help-block">
                                <strong>{{ $errors->first('field') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>                        


                <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                    <label for="image" class="col-md-4 control-label">Картинка</label>

                    <div class="col-md-12">
                        <input id="image" type="file" class="form-control" name="image" required>

                        @if ($errors->has('image'))
                            <span class="help-block">
                                <strong>{{ $errors->first('image') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label for="description" class="col-md-4 control-label">Описание</label>

                    <div class="col-md-12">
                        <textarea id="description" class="form-control" name="description" rows="4" required>{{$product->description}}</textarea>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Редактировать
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
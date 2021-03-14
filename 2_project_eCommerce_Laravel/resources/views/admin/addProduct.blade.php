@extends('layouts.adminLayout')

@section('content')

<div class="card-body">
    
 <div class="rowContainer"><h5>Добавить категорию</h5></div>  
   <div class="row rowContainer">
        <div class="col-md-8 form rowBlock header main">
            <form class="form-horizontal" method="POST" action="{{ route('create') }}">
                {{ csrf_field() }}

                <div style="padding-top: 3%;" class="form-group">
                    <label for="category" class="col-md-4 control-label">Добавить категорию</label>

                    <div class="col-md-12">
                        <input id="category" type="text" class="form-control{{ $errors->has('category') ? ' has-error' : '' }}" name="category">

                        @if ($errors->has('category'))
                            <span class="help-block">
                                <strong>{{ $errors->first('category') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Добавить
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
<div class="rowContainer"><h5>Добавить товар</h5></div>  
   <div class="row rowContainer"> 
        <div class="col-md-8 form rowBlock header main">

            <form class="form-horizontal" method="POST" action="{{ route('createProduct') }}" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div style="padding-top: 3%;" class="form-group">
                    <label for="title" class="col-md-4 control-label">Название</label>

                    <div class="col-md-12">
                        <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' has-error' : '' }}" name="title">

                        @if ($errors->has('title'))
                            <span class="help-block" role="alert">
                                {{ $errors->first('title') }}
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label for="category_id" class="col-md-4 control-label">Добавить категорию</label>

                    <div class="col-md-12">

                        <select id="category_id" class="form-control{{ $errors->has('category_id') ? ' has-error' : '' }}" name="category_id">
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



                <div class="form-group">
                    <label for="price" class="col-md-4 control-label">Цена</label>

                    <div class="col-md-12">
                        <input id="price" type="text" class="form-control{{ $errors->has('price') ? ' has-error' : '' }}" name="price">

                        @if ($errors->has('price'))
                            <span class="help-block">
                                <strong>{{ $errors->first('price') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>


                <div class="form-group">
                    <label for="field" class="col-md-4 control-label">Вид продажи</label>

                    <div class="col-md-12">
                        <input id="field" type="text" class="form-control{{ $errors->has('field') ? ' has-error' : '' }}" name="field">

                        @if ($errors->has('field'))
                            <span class="help-block">
                                <strong>{{ $errors->first('field') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>                        


                <div class="form-group">
                    <label for="image" class="col-md-4 control-label">Картинка</label>

                    <div class="col-md-12">
                        <input id="image" type="file" class="form-control{{ $errors->has('image') ? ' has-error' : '' }}" name="image">                    

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
                        <textarea id="description" class="form-control{{ $errors->has('image2') ? ' has-error' : '' }}" name="description" rows="4"></textarea>

                        @if ($errors->has('description'))
                            <span class="help-block">
                                <strong>{{ $errors->first('description') }}</strong>
                            </span>
                        @endif                        
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Добавить
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection



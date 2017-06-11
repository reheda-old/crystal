@extends('layouts.app')

@section('content')
    <?php
    use App\Helpers\DatabaseHelper;
    use App\Models\Currency;
    use App\Models\WallType;
    use App\Models\Category;
    use App\Models\Client;
    use App\Models\District;
    ?>
    <div class="container">

        <div class="row">
            <h2>Создать обьявление</h2>
            <form action="/posts" method="POST">
                {{csrf_field()}}
                <input type="hidden" name="user_id" value="{{Auth::user()->getId()}}">
                @if(count($errors)>0)
                    <div class="form-group">
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif
                <div class="form-group">
                    <label for="title">Заголовок</label>
                    <input type="text" class="form-control" name="title" id="title">
                </div>
                <div class="form-group">
                    <label for="category_id">Категория</label>
                    <select class="form-control" name="category_id" id="category_id">
                        @foreach($elements = Category::all(['id','display_name']) as $elem)
                            <option value="{{$elem->id}}">{{$elem->display_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="body">Описание</label>
                    <textarea name="body" id="body" class="form-control" rows="6"></textarea>
                </div>
                <div class="form-group">
                    <label for="client_id">Клиент</label>
                    <select class="form-control" name="client_id" id="client_id">
                        @foreach($elements = Client::all(['id','surname','name','middle_name']) as $elem)
                            <option value="{{$elem->id}}">{{$elem->surname.' '.$elem->name.' '.$elem->middle_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="address">Адрес</label>
                    <input type="text" class="form-control" name="address" id="address">
                </div>
                <div class="form-group">
                    <label for="district_id">Район</label>
                    <select class="form-control" name="district_id" id="district_id">
                        @foreach($elements = District::all(['id','display_name']) as $elem)
                            <option value="{{$elem->id}}">{{$elem->display_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="floor">Этаж</label>
                    <input type="number" class="form-control" name="floor" id="floor">
                </div>
                <div class="form-group">
                    <label for="max_floor">Этажность</label>
                    <input type="number" class="form-control" name="max_floor" id="max_floor">
                </div>
                <div class="form-group">
                    <label for="total_area">Общая площадь (м2)</label>
                    <input type="number" class="form-control" name="total_area" id="total_area">
                </div>
                <div class="form-group">
                    <label for="residential_area">Жилая площадь (м2)</label>
                    <input type="number" class="form-control" name="residential_area" id="residential_area">
                </div>
                <div class="form-group">
                    <label for="kitchen_area">Площадь кухни (м2)</label>
                    <input type="number" class="form-control" name="kitchen_area" id="kitchen_area">
                </div>
                <div class="form-group">
                    <label for="rooms">Комнаты</label>
                    <input type="number" class="form-control" name="rooms" id="rooms">
                </div>
                <div class="form-group">
                    <label for="bathrooms">Саунзлы</label>
                    <input type="number" class="form-control" name="bathrooms" id="bathrooms">
                </div>
                <div class="form-group">
                    <label for="parking">Парковка</label>
                    <input type="number" class="form-control" name="parking" id="parking">
                </div>
                <div class="form-group">
                    <label for="balconies">Балконы</label>
                    <input type="number" class="form-control" name="balconies" id="balconies">
                </div>
                <div class="form-group">
                    <label for="construction_year">Год постройки</label>
                    <input type="number" class="form-control" name="construction_year" id="construction_year">
                </div>
                <div class="form-group">
                    <label for="wall_type_id">Тип стен</label>
                    <select class="form-control" name="wall_type_id" id="wall_type_id">
                        @foreach($elements = WallType::all(['id','display_name']) as $elem)
                            <option value="{{$elem->id}}">{{$elem->display_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="price">Цена</label>
                    <input type="number" class="form-control" name="price" id="price" min="0">
                </div>
                <div class="form-group">
                    <label for="currency_id">Тип валюты</label>
                    <select class="form-control" name="currency_id" id="currency_id">
                        @foreach($elements = Currency::all(['id','display_name']) as $elem)
                            <option value="{{$elem->id}}">{{$elem->display_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="published_at">Дата публикации</label>
                    <input type="datetime-local" class="form-control" name="published_at" id="published_at">
                </div>
                <div class="form-group">
                    <label for="published">Опубликовать</label>
                    <input type="checkbox" name="published" id="published" checked value="1">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Создать</button>
                </div>

            </form>

        </div><!-- /.row -->

    </div><!-- /.container -->
@endsection

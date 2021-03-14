<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Product;
use App\Cat;

class StoreController extends Controller
{
    #Добавляем товар
    public function createProduct()
    {   
        $data = request()->validate([
            'title' => 'required|max:200',
            'category_id' => 'required|max:50',
            'price' => 'required|max:50',
            'description' => 'required|max:4000',
            'field' => 'required|max:100',
            'image' => 'required|image',                                      
        ]);        


        $image = request('image');#берем фото     
        $filename = $image->store('uploads');#грузим в эту папку
      

       Product::create([
            'title' => $data['title'],
            'category_id' => $data['category_id'],
            'price' => $data['price'],
            'description' => $data['description'],
            'field' => $data['field'],                              
            'image' => $filename,                        
        ]);

                session()->flash('success', 'Товар добавлен!'); 
                return redirect()->back();                
    }


#Добавляем категорию если ее не существует
    public function create()
    {   
        $data = request()->validate([
            'category' => 'required|max:50',                                     
        ]);


        $cat = Cat::where('category', '=', request('category'))->get();
        $category = $cat->count();

        if($category < 1){
                Cat::create([
                    'category' => request('category'),          
                ]);  
                session()->flash('success', 'Категория добавлена!');
                return redirect()->back();

        }elseif($category > 0){
                session()->flash('success', 'Такая категория существует!');
                return redirect()->back();
        }
    }


#Удоляем товар
    public function destroy(Product $id)
    {   
        Storage::delete($id->image);

        $id->delete();

        session()->flash('success', 'Товар удален!'); 

        return redirect()->back();       
    }


#Страница редактирования товара и категории
    public function editPage(Product $id)
    {   
        $product = Product::where('id', '=', $id->id)->first();

        $categories = Cat::get();

        return view('admin.editPage', compact('product', 'categories'));
    }


#Редактирования товара
    public function edit($id)
    { 

    $image = Product::where('id', $id)->first();
    Storage::delete($image->image);#Удаляем картинку из дериктории
    $filename = request('image')->store('uploads');#грузим новую

    Product::where('id', $id)->update([
                    'title' => request('title'),
                    'category_id' => request('category_id'), 
                    'price' => request('price'),
                    'description' => request('description'), 
                    'field' => request('field'),                                                                          
                    'image' => $filename,         
                ]);

        session()->flash('success', 'Товар обнавлен!'); 

        return redirect()->back();       
    }  


#Cтраница редактирования категории
    public function editCategoryPage(Cat $id)
    {
        return view('admin.editCategoryPage', compact('id'));
    }

#Редактируем категорию
    public function editCategory($id)
    {

    Cat::where('id', $id)->update([
                    'category' => request('category'),        
                ]);

        session()->flash('success', 'Категория редактирована!'); 

        return redirect('/admin');            
    }


#обновляем просмотры
    public function viewUpload($id)
    {
    Product::where('id', $id)->update([
            'views' => '0',
        ]);

    session()->flash('success', 'Просмотры обновлены!'); 
    return redirect()->back();           
    }



}

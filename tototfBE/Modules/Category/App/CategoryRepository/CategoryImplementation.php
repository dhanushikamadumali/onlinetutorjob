<?php

namespace Modules\Category\App\CategoryRepository;

use Modules\Category\App\CategoryRepository\CategoryInterface;
use Modules\Category\App\Models\Category;
use Spatie\QueryBuilder\QueryBuilder;

class CategoryImplementation  implements CategoryInterface  
{

    public function store($data)
    {
        $createddata =  Category::create($data);
        return  $createddata;
    }

    public function index()
    {
        $categories =  QueryBuilder::for(Category::class)
            ->allowedFilters('name')
            ->get();

            return $categories;
    }

    public function update($data,$id)
    {
        $updateddata =  $id->update($data);
        return    $updateddata;
    }


    public function delete($id)
    {
        $id->delete();
    }
}

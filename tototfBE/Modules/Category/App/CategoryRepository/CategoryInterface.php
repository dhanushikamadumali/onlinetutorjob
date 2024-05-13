<?php

namespace Modules\Category\App\CategoryRepository;



interface  CategoryInterface
{
    public function store($data);

    public function index();

    public function update($data,$id);

    public function delete($id);
}

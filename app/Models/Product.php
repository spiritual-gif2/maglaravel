<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   /**
        * PRODUCT ATTRIBUTES
        * $this->attributes['id'] - int - contains the product primary key (id)
        * $this->attributes['name'] - string - contains the product name
        * $this->attributes['description'] - string - contains the product description
        * $this->attributes['image'] - string - contains the product image
        * $this->attributes['price'] - int - contains the product price
        * $this->attributes['quantity'] - int - contains the product quantity
        * $this->attributes['created_at'] - timestamp - contains the product creation date
        * $this->attributes['updated_at'] - timestamp - contains the product update date
    */

    //id
    public function getId(){
        return $this->attributes['id'];
    }

    public function setId($id){
        return $this->attributes['id'] = $id;
    }




    //name
    public function getName(){
        return $this->attributes['name'];
    }

    public function setName($name){
        return $this->attributes['name'] = $name;
    }    



    //description
    public function getDescription(){
        return $this->attributes['description'];
    }

    public function setDescription($description){
        return $this->attributes['description'] = $description;
    }




    //image
    public function getImage(){
        return $this->attributes['image'];
    }

    public function setImage($image){
        return $this->attributes['image'] = $image;
    }




    //price
    public function getPrice(){
        return $this->attributes['price'];
    }

    public function setPrice($price){
        return $this->attributes['price'] = $price;
    }



    //quantity
    public function getQuantity(){
        return $this->attributes['quantity'];
    }

    public function setQuantity($quantity){
        return $this->attributes['quantity'] = $quantity;
    }



    //created at
    public function getCreatedAt(){
        return $this->attributes['created_at'];
    }

    public function setCreatedAt($created_at){
        return $this->attributes['created_at'] = $created_at;
    }

    //updated at
    public function getUpdatedAt()
    {
        return $this->attributes['updated_at'];
    }

    public function setUpdatedAt($updated_at){
        return $this->attributes['updated_at'] = $updated_at;
    }
}
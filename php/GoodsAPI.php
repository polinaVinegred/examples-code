<?php

class GoodsAPI
{
    public function GetNameProductsQuery()
    {
        $query = "select
    goods.name,
    prices.price
from
    goods as goods
        left join prices as prices
        on prices.goodsid = goods.id 
 where
    id = 3";
        return $query;
    }

    public function GetURLPictures()
    {
        $query = "SELECT bigURL FROM  `pictures` WHERE  goodsidD = 3";
        return $query;
    }
}



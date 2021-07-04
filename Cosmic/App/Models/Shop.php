<?php
namespace App\Models;

use Core\QueryBuilder;

class Shop
{

    public static function getOffers()
    {
        return QueryBuilder::connection()->table('website_shop_offers')->get();
    }

    public static function getOfferById($id)
    {
        return QueryBuilder::connection()->table('website_shop_offers')->where('id', $id)->first();
    }

    public static function getOfferByOfferId($offer_id)
    {
        return QueryBuilder::connection()->table('website_shop_offers')->where('offer_id', $offer_id)->first();
    }

    public static function insertBadge($user_id, $filename)
    {
        return QueryBuilder::connection()->table('website_badge_requests')->insert(array("user_id" => $user_id, "badge_imaging" => $filename));
    }
}

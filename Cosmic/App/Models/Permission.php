<?php
namespace App\Models;

use Core\QueryBuilder;
use PDO;

class Permission
{
    public static function get($rank)
    {
        return QueryBuilder::connection()->table('website_permissions_ranks')->select('website_permissions.*')->select('website_permissions_ranks.*')->
                    select(QueryBuilder::connection()->raw('website_permissions_ranks.id as idp'))->setFetchMode(PDO::FETCH_CLASS, get_called_class())
                ->join('website_permissions', 'website_permissions_ranks.permission_id', '=', 'website_permissions.id')->where('website_permissions_ranks.rank_id', $rank)->get();
    }
  
    public static function exists($permission, $rank)
    {
        if (!in_array($permission, array_column(self::get($rank), 'permission'))) {
            return false;
        }
        return true;
    }

    public static function permissionExists($role, $permission)
    {
        return queryBuilder::connection()->table('website_permissions_ranks')->where('rank_id', $role)->where('permission_id', $permission)->count();
    }

    public static function permissionAndRankExists($rank, $permission)
    {
        return QueryBuilder::connection()->table('website_permissions_ranks')->where('permission_id', $permission)->where('rank_id', $rank)->first();
    }

    public static function create($role, $permission)
    {
        $data = array(
            'rank_id' => $role,
            'permission_id'  => $permission,
        );

        return QueryBuilder::connection()->table('website_permissions_ranks')->insert($data);
    }

    public static function delete($permission, $rank)
    {
        return QueryBuilder::connection()->table('website_permissions_ranks')->where('permission_id', $rank)->where('rank_id', $permission)->delete();
    }

    public static function getPermissions($string = null)
    {
        return QueryBuilder::connection()->table('website_permissions')->select('website_permissions.id')->select('website_permissions.permission')->orderBy('id', 'desc')->setFetchMode(PDO::FETCH_CLASS, get_called_class())->where('website_permissions.permission', 'LIKE ', '%' . $string . '%')->get();
    }

    public static function getPermissionsData($id)
    {
        return QueryBuilder::connection()->table('website_permissions_ranks')->select(QueryBuilder::connection()->raw('website_permissions.id as idp'))->select('website_permissions_ranks.*')->select('website_permissions.description')->select('website_permissions.permission')->where('rank_id', $id)->join('website_permissions', 'website_permissions_ranks.permission_id', '=', 'website_permissions.id')->get();
    }

    public static function getRanks($allRanks = false)
    {
        if($allRanks) {
            return QueryBuilder::connection()->table('permissions')->orderBy('id', 'desc')->get();
        }

        return QueryBuilder::connection()->table('permissions')->where('id', '>', 2)->orderBy('id', 'desc')->get();
    }

    public static function getDirection()
    {
        $direction = QueryBuilder::connection()->table('permissions')->where('rank_name', 'Direction')->get();
        return QueryBuilder::connection()->table('users')->select(['id', 'username', 'online', 'look', 'motto'])->setFetchMode(PDO::FETCH_CLASS, get_called_class())
            ->where('rank', $direction[0]->id)->orderBy('online', 'desc')->get();
    }

    public static function getAdmin()
    {
        $admin = QueryBuilder::connection()->table('permissions')->where('rank_name', 'Administration')->get();
        return QueryBuilder::connection()->table('users')->select(['id', 'username', 'online', 'look', 'motto'])->setFetchMode(PDO::FETCH_CLASS, get_called_class())
            ->where('rank', $admin[0]->id)->orderBy('online', 'desc')->get();
    }

    public static function getStaffs()
    {
        return QueryBuilder::connection()->table('users')->select(['id', 'username', 'online', 'look', 'motto'])->setFetchMode(PDO::FETCH_CLASS, get_called_class())
            ->where('rank','>=', '3')->where('rank', '<=', 8)->orderBy('rank', 'desc')->orderBy('online', 'desc')->get();
    }
  
    public static function getTeams()
    {
        return QueryBuilder::connection()->table('website_extra_ranks')->get();
    }

    public static function getRoles($string = null)
    {
        return QueryBuilder::connection()->table('permissions')->select('rank_name')->select('id')->orderBy('id', 'desc')->setFetchMode(PDO::FETCH_CLASS, get_called_class())->where('rank_name', 'LIKE ', '%' . $string . '%')->get();
    }

    public static function getByRoleId($id)
    {
        return QueryBuilder::connection()->table('website_permissions_ranks')->where('permission_id', $id)->get();
    }
  
    public static function getPermissionById($id)
    {
        return QueryBuilder::connection()->table('website_permissions_ranks')->where('id', $id)->first();
    }

    public static function getAllColumns() 
    {
        return QueryBuilder::connection()->query("SHOW columns FROM permissions")->get();
    }
}
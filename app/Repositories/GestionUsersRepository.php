<?php
namespace App\Repositories;


use Carbon\Carbon;
use Illuminate\Database\Connection;
use Illuminate\Support\Facades\DB;

class GestionUsersRepository
{
	public function getUser($idUser)
	{
		$user = DB::table('users')
			->select('*')
			->where('users.id', $idUser)
            ->get();
		return $user;
	}

	public function getUsersList()
	{
		$usersList = DB::select("SELECT u.id AS userId, u.name AS name, u.email AS email, GROUP_CONCAT(r.name SEPARATOR ', ' ) AS roles 
			FROM users AS u 
			LEFT JOIN users_roles AS ur ON ur.id_users = u.id
			LEFT JOIN roles AS r ON r.id = ur.id_roles
			GROUP BY u.id;");
		return $usersList;
	}

	public function getRoleList()
	{
		$roleList = DB::select("SELECT rol.id, rol.name, rol.description
			FROM roles AS rol");
		return $roleList;
	}

	public function getUserRoles($authUserId)
	{
		$userRoles = DB::select("SELECT GROUP_CONCAT(rol.id SEPARATOR ', ' ) AS rolesId
			FROM roles AS rol
			INNER JOIN users_roles AS ur ON rol.id = ur.id_roles
			WHERE ur.id_users = " . $authUserId);
		return $userRoles;
	}

	public function getRessourcesListFromUser($authUserId)
	{
		$userRessource = DB::select("SELECT res.name, res.description
			FROM ressources AS res
			INNER JOIN roles_ressources AS rr ON res.id = rr.id_ressources
			INNER JOIN roles as rol ON rr.id_roles = rol.id
			INNER JOIN users_roles AS ur ON rol.id = ur.id_roles
			WHERE ur.id_users = " . $authUserId . "
			GROUP BY res.name
			ORDER BY res.name");
		return $userRessource;
	}

	public function addUser($userName, $userMail, $userPassword)
	{
		DB::table('users')->insert([
			'name' => $userName,
			'email' => $userMail,
			'password' => bcrypt($userPassword),
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);
	}
    
    public function addRoleToUser($userId, $roleId)
    {
    	DB::table('users_roles')->insert([
			'id_users' => $userId,
			'id_roles' => $roleId,
		]);
    }

    public function deleteRoleToUser($userId, $roleId)
    {
 		DB::table('users_roles')->where('id_users', "=", $userId)->where('id_roles', "=", $roleId)->delete();
    }
}

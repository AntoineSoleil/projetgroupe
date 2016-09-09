<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('ipFormation', function(Blueprint $table) {
			$table->foreign('id_users')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('entreprises', function(Blueprint $table) {
			$table->foreign('id_users')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('etudiants', function(Blueprint $table) {
			$table->foreign('id_users')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('offreEmplois', function(Blueprint $table) {
			$table->foreign('auteur')->references('id')->on('entreprises')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('suiviPostulants', function(Blueprint $table) {
			$table->foreign('etudiants')->references('id')->on('etudiants')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('suiviPostulants', function(Blueprint $table) {
			$table->foreign('offreEmploi')->references('id')->on('offreEmplois')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('cras', function(Blueprint $table) {
			$table->foreign('auteur')->references('id')->on('ipFormation')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('conges', function(Blueprint $table) {
			$table->foreign('auteur')->references('id')->on('ipFormation')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('actualites', function(Blueprint $table) {
			$table->foreign('auteur')->references('id')->on('ipFormation')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('cvtheques', function(Blueprint $table) {
			$table->foreign('auteur')->references('id')->on('etudiants')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('users_roles', function(Blueprint $table) {
			$table->foreign('id_users')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('users_roles', function(Blueprint $table) {
			$table->foreign('id_roles')->references('id')->on('roles')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('roles_sections_droits', function(Blueprint $table) {
			$table->foreign('id_roles')->references('id')->on('roles')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('roles_sections_droits', function(Blueprint $table) {
			$table->foreign('id_section')->references('id')->on('section_sites')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('roles_sections_droits', function(Blueprint $table) {
			$table->foreign('id_droits')->references('id')->on('droits')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('notes_frais', function(Blueprint $table) {
			$table->foreign('auteur')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('documents_travail', function(Blueprint $table) {
			$table->foreign('auteur')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('ipFormation', function(Blueprint $table) {
			$table->dropForeign('ipFormation_id_users_foreign');
		});
		Schema::table('entreprises', function(Blueprint $table) {
			$table->dropForeign('entreprises_id_users_foreign');
		});
		Schema::table('etudiants', function(Blueprint $table) {
			$table->dropForeign('etudiants_id_users_foreign');
		});
		Schema::table('offreEmplois', function(Blueprint $table) {
			$table->dropForeign('offreEmplois_auteur_foreign');
		});
		Schema::table('suiviPostulants', function(Blueprint $table) {
			$table->dropForeign('suiviPostulants_etudiants_foreign');
		});
		Schema::table('suiviPostulants', function(Blueprint $table) {
			$table->dropForeign('suiviPostulants_offreEmploi_foreign');
		});
		Schema::table('cras', function(Blueprint $table) {
			$table->dropForeign('cras_auteur_foreign');
		});
		Schema::table('conges', function(Blueprint $table) {
			$table->dropForeign('conges_auteur_foreign');
		});
		Schema::table('actualites', function(Blueprint $table) {
			$table->dropForeign('actualites_auteur_foreign');
		});
		Schema::table('cvtheques', function(Blueprint $table) {
			$table->dropForeign('cvtheques_auteur_foreign');
		});
		Schema::table('users_roles', function(Blueprint $table) {
			$table->dropForeign('users_roles_id_users_foreign');
		});
		Schema::table('users_roles', function(Blueprint $table) {
			$table->dropForeign('users_roles_id_roles_foreign');
		});
		Schema::table('roles_sections_droits', function(Blueprint $table) {
			$table->dropForeign('roles_sections_droits_id_roles_foreign');
		});
		Schema::table('roles_sections_droits', function(Blueprint $table) {
			$table->dropForeign('roles_sections_droits_id_section_foreign');
		});
		Schema::table('roles_sections_droits', function(Blueprint $table) {
			$table->dropForeign('roles_sections_droits_id_droits_foreign');
		});
		Schema::table('notes_frais', function(Blueprint $table) {
			$table->dropForeign('notes_frais_auteur_foreign');
		});
		Schema::table('documents_travail', function(Blueprint $table) {
			$table->dropForeign('documents_travail_auteur_foreign');
		});
	}
}
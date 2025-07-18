<?php

namespace WGS\ADMINXTHEME\WGSADMINXTHEME;

class wgsAdminxAdminThemeClasses
{
	public function __construct()
	{
	}

	public function wgs_fetch_table_record_dual_condition($tableName, $condtioncolumn, $condtionvalue, $condtioncolumn2, $condtionvalue2, $for)
	{
		if ($for == 'allData') {
			$allRecord = \WHMCS\Database\Capsule::table($tableName)->where($condtioncolumn, $condtionvalue)->where($condtioncolumn2, $condtionvalue2)->get();
		}
		else if ($for == 'singleRowData') {
			$allRecord = \WHMCS\Database\Capsule::table($tableName)->where($condtioncolumn, $condtionvalue)->where($condtioncolumn2, $condtionvalue2)->first();
		}
		else if ($for == 'countRowData') {
			$allRecord = \WHMCS\Database\Capsule::table($tableName)->where($condtioncolumn, $condtionvalue)->where($condtioncolumn2, $condtionvalue2)->count();
		}
		else if ($for == 'deleteRowData') {
			$allRecord = \WHMCS\Database\Capsule::table($tableName)->where($condtioncolumn, $condtionvalue)->where($condtioncolumn2, $condtionvalue2)->delete();
		}
		else if ($for == 'allDataNotCond') {
			$allRecord = \WHMCS\Database\Capsule::table($tableName)->where($condtioncolumn, $condtionvalue)->where($condtioncolumn2, '!=', $condtionvalue2)->get();
		}

		return $allRecord;
	}

	public function wgs_fetch_table_record($tableName, $condtioncolumn, $condtionvalue, $for)
	{
		if ($for == 'allData') {
			$allRecord = \WHMCS\Database\Capsule::table($tableName)->get();
		}
		else if ($for == 'singleRowData') {
			$allRecord = \WHMCS\Database\Capsule::table($tableName)->where($condtioncolumn, $condtionvalue)->first();
		}
		else if ($for == 'allRowdata') {
			$allRecord = \WHMCS\Database\Capsule::table($tableName)->where($condtioncolumn, $condtionvalue)->get();
		}
		else if ($for == 'countData') {
			$allRecord = \WHMCS\Database\Capsule::table($tableName)->where($condtioncolumn, $condtionvalue)->count();
		}
		else if ($for == 'deleteRow') {
			$allRecord = \WHMCS\Database\Capsule::table($tableName)->where($condtioncolumn, $condtionvalue)->delete();
		}

		return $allRecord;
	}

	public function wgsInsertUpdateData($request, $tableName, $colName = NULL, $colVal = NULL)
	{
		unset($request['token']);
		unset($request['submit_save']);
		$request['created_at'] = date('Y-m-d H:i:s', time());
		$request['updated_at'] = date('Y-m-d H:i:s', time());

		if ($colName != NULL) {
			unset($request['created_at']);

			try {
				$update = \WHMCS\Database\Capsule::table($tableName)->where($colName, $colVal)->update($request);
				$response = ['status' => 'success', 'msg' => 'Data Updated Successfully'];
			}
			catch (Exception $ex) {
				$error = $ex->getMessage();
				$response = ['status' => 'error', 'msg' => $error];
			}
		}
		else {
			try {
				$insert = \WHMCS\Database\Capsule::table($tableName)->insertGetId($request);
				$response = ['status' => 'success', 'msg' => 'Data Saved Successfully', 'lastId' => $insert];
			}
			catch (Exception $ex) {
				$error = $ex->getMessage();
				$response = ['status' => 'error', 'msg' => $error];
			}
		}

		return $response;
	}

	public function wgsAdminxTableCreate()
	{
		$errors = '';

		try {
			if (!\WHMCS\Database\Capsule::Schema()->hasTable('mod_adminx_theme_setting')) {
				\WHMCS\Database\Capsule::schema()->create('mod_adminx_theme_setting', function($table) {
					$table->increments('id');
					$table->string('setting');
					$table->longText('value');
					$table->index('setting');
					$table->timestamps();
				});
			}
		}
		catch (Exception $ex) {
			logActivity('Unable to create db table mod_adminx_theme_setting Error: ' . $ex->getMessage());
			$error = $ex->getMessage();
		}

		return $errors;
	}

	public function wgsAdminxTableDrop()
	{
		$error = '';

		try {
			$deleteDbTable = \WHMCS\Database\Capsule::table('tbladdonmodules')->where('module', 'adminx')->where('setting', 'delete_db')->first();

			if ($deleteDbTable->value == 'on') {
				\WHMCS\Database\Capsule::schema()->dropIfExists('mod_adminx_theme_setting');
			}
		}
		catch (Exception $ex) {
			logActivity('Unable to delete table mod_adminx_theme_setting: ' . $ex->getMessage());
			$error = $ex->getMessage();
		}

		return $error;
	}

	function wgsAdminxThemeLicenseCheck($licensekey) 
{
$results = [];
$results["status"] = "Active";
$results["registeredname"] = "WHMCSGLOBALSERVICES";
$results["email"] = "info@whmcsglobalservices.com";
$results["validdomain"] = "whmcsglobalservices.com";
$results["productname"] = "WGS AdminX";
return $results;
}
}

if (!defined('WHMCS')) {
	exit('This file cannot be accessed directly');
}

?>
<?php
namespace App\Myapp;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class Serial_db {
	public function first_index(){
		$company_name = DB::table('orders')->where('company', 'AACE')->first();
		echo $company_name;
		return;
	}

	public function just_echo(){
		return 'hello world?!';
	}
}
?>

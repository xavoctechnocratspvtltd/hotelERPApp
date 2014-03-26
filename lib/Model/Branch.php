<?php
namespace hotelERPApp;
class Model_Branch extends \Model_Table
{
	public $table='hotelERPApp_branch';
	function init()
	{
		parent::init();
		
		$this->hasOne('hotelERPApp/Hotel','hotel_id');
		 
		
		$this->addField('branch_address')->caption('Address')->mandatory('Cannot be Null');
		$this->addField('branch_contact_no')->type('int')->caption('Contact Number')->mandatory('Cannot be Null');
		$this->addField('branch_email')->caption('E-mail')->mandatory('Cannot be Null');

		$this->hasMany('hotelERPApp/Package','branch_id');
		$this->hasMany('hotelERPApp/Room','branch_id');
		$this->hasMany('hotelERPApp/Customer','branch_id');
		$this->hasMany('hotelERPApp/Employees','branch_id');
		$this->hasMany('hotelERPApp/Service','branch_id');

		$this->add('dynamic_model/Controller_AutoCreator');

	}

	
} 
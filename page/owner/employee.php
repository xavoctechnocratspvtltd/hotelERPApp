<?php
class page_hotelERPApp_page_owner_employee extends page_componentBase_page_owner_main{
	function init(){
		parent::init();

		$this->h1->add('H1')->setElement('a')
             ->setAttr('href','?page=hotelERPApp_page_owner_main')
             ->set($this->component_namespace);
		


		$menu=$this->add('hotelERPApp/View_MyMenu');
		$menu->addMenuItem('hotelERPApp_page_owner_newemployee','New Employee','info','plus');
		$menu->addMenuItem('hotelERPApp_page_owner_showemployee','Show Employee','info','search');
		
	}
}
<?php

namespace visiondecoder\Packages\CMS;

/**
 *
 */
class CMS {

	public $DB;
	private $pageName;
	private $cms_contents = "cms_contents";
	private $categoryTable = "categories";
	private $subcategoryTable = "subcategories";
	private $websiteUrl;

	function __construct($DB) {
		# code...
		// echo "cms initialized";
		$this->DB = $DB;
		$this->websiteUrl = 'http://localhost.com/';
	}

	public function setDbConnection($database) {
		$this->DB = $database;
	}

	/*
		 * CMS Page Contents
	*/

	public function setPage($pageName) {
		$this->pageName = $pageName;
	}

	public function getPageName() {
		$pageData = $this->DB->SelectColumn('page_name', ['page_name' => $this->pageName]);
		return $pageData;
	}

	public function getPageTitle() {
		$pageData = $this->DB->SelectColumn('title', ['page_name' => $this->pageName]);
		return $pageData;
	}

	public function getPageDescription() {
		$pageData = $this->DB->SelectColumn('description', ['page_name' => $this->pageName]);
		return $pageData;
	}

	public function getPageContent() {
		$pageData = $this->DB->SelectColumn('content', ['page_name' => $this->pageName]);
		return $pageData;
	}

	public function getPageKeywords() {
		$pageData = $this->DB->SelectColumn('keywords', ['page_name' => $this->pageName]);
		return $pageData;
	}

	public function getPageUrl() {
		$pageData = $this->DB->SelectColumn('url', ['page_name' => $this->pageName]);
		return $pageData;
	}

	public function getPageStatus() {
		$pageData = $this->DB->SelectColumn('status', ['page_name' => $this->pageName]);
		return $pageData;
	}

	/*
		 * CMS Content
	*/

	public function FetchCMSContents() {
		$cmsResult = $this->DB->SelectAllWhere(['website_url' => $this->websiteUrl]);
		$cmsContents = [];
		while ($records = $cmsResult->fetch_object()) {
			$cmsContents = $records;
		}
		return $cmsContents;
	}

	public function FetchCMSPage() {
		$cmsResult = $this->DB->SelectAllWhere(['page_name' => $this->pageName]);
		$cmsContents = [];
		while ($records = $cmsResult->fetch_object()) {
			$cmsContents = $records;
		}
		return $cmsContents;
	}

	public function FetchMenus() {
		$menuResult = $this->DB->SelectAllWhere(['website_url' => $this->websiteUrl]);
		$menus = [];
		while ($records = $menuResult->fetch_object()) {
			$menus = $records;
		}
		return $menus;
	}

	public function UpdateMenu($menuData) {
		$this->DB->Update($menuData, ['website_url' => $this->websiteUrl]);
	}

	public function UpdateCMS($data) {
		if (!empty($data)) {
			$this->DB->Update($data, ['website_url' => $this->websiteUrl]);
		}
	}

	public function UpdateContact($data) {
		if (!empty($data)) {
			$this->DB->Update($data, ['page_name' => $this->pageName]);
		}
	}

	public function setHomeSlider($data, $fileName) {
		if (!empty($data)) {
			$this->DB->Update($data, ['website_url' => $this->websiteUrl]);
		}
		if (!empty($fileName)) {
			foreach ($fileName as $file) {
				$key = array_keys($file);
				$this->DB->SelectTable('sliders');
				$sliderPath = $this->DB->SelectColumnWhere($key[0], ['website_url' => $this->websiteUrl]);
				unlink("uploads/$sliderPath");
				$this->DB->Update($file, ['website_url' => $this->websiteUrl]);
			}
		}
	}

	public function getHomeSlider() {
		$Result = $this->DB->SelectAllWhere(['website_url' => $this->websiteUrl]);
		$sliders = [];
		while ($records = $Result->fetch_object()) {
			$sliders = $records;
		}
		return $sliders;
	}

	public function DeleteAboutImage() {
		$this->DB->SelectTable('cms_pages');
		$fileName = $this->DB->SelectColumnWhere('image1', ['page_name' => 'about']);
		echo $fileName;
		unlink("uploads/$fileName");
	}

	public function setHomeAbout($data, $fileName) {
		if (!empty($data)) {
			$this->DB->Update($data, ['page_name' => $this->pageName]);
		}
		if (!empty($fileName)) {
			$this->DeleteAboutImage();
			foreach ($fileName as $file) {
				$this->DB->Update($file, ['page_name' => $this->pageName]);
			}
		}
	}

	public function setWebsiteUrl($websiteUrl) {
		$this->websiteUrl = $websiteUrl;
	}

	public function getWebsiteUrl() {
		$pageData = $this->DB->SelectColumn('website_url', ['website_url' => $this->websiteUrl]);
		return $pageData;
	}

	public function DeleteLogo() {
		$this->DB->SelectTable('cms_contents');
		$fileName = $this->DB->SelectColumnWhere('website_logo', ['website_url' => $this->websiteUrl]);
		unlink("uploads/$fileName");
	}

	public function setWebsiteLogo($fileName) {
		$this->DeleteLogo();
		if (!empty($fileName)) {
			foreach ($fileName as $file) {
				$this->DB->Update($file, ['website_url' => $this->websiteUrl]);
			}
		}
	}

	public function getWebsiteLogo() {
		$pageData = $this->DB->SelectColumn('website_logo', ['website_url' => $this->websiteUrl]);
		return $pageData;
	}

	public function getContactPerson() {
		$pageData = $this->DB->SelectColumn('contact_person', ['website_url' => $this->websiteUrl]);
		return $pageData;
	}

	public function getContactNumber() {
		$pageData = $this->DB->SelectColumn('contact_number', ['website_url' => $this->websiteUrl]);
		return $pageData;
	}

	public function getContactAddress() {
		$pageData = $this->DB->SelectColumn('contact_address', ['website_url' => $this->websiteUrl]);
		return $pageData;
	}

	public function getFooterCopyright() {
		$pageData = $this->DB->SelectColumn('footer_copyright', ['website_url' => $this->websiteUrl]);
		return $pageData;
	}

	public function getFooterDevelopBy() {
		$pageData = $this->DB->SelectColumn('footer_develop_by', ['website_url' => $this->websiteUrl]);
		return $pageData;
	}

	/* CMS Product Data */

	public function createCategory($name) {
		$data = ['category_name' => $name];
		$this->DB->addSingleRecord($this->categoryTable, $data);
		// $fieldId = $this->DB->SelectColumn($this->advanceFieldsTable, 'id', ['field_name' => $name]);
	}

	public function createSubCategory($name, $categoryId) {
		$data = ['subcategory_name' => $name, 'category_id' => $categoryId];
		$this->DB->addSingleRecord($this->subcategoryTable, $data);
		// $fieldId = $this->DB->SelectColumn($this->advanceFieldsTable, 'id', ['field_name' => $name]);
	}

}
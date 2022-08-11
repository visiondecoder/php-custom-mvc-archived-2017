<?php

namespace visiondecoder\Packages\FileUpload;

/**
 *
 */
class Image {

	private $files;
	private $uploadPath;
	private $totalFileCount;
	private $filesExt;
	private $uniqueFileName;
	private $fileUploadStatus;

	public function ReadFiles($files) {
		$this->files = $files;
		$this->totalFileCount = count($files['name']);

		for ($i = 0; $i < $this->totalFileCount; $i++) {
			$this->filesExt[] = "." . $this->GetFileExt($this->files['name'][$i]);
		}

		return false;

	}

	public function GetFileExt($fileName) {
		$fileExt = pathinfo($fileName, PATHINFO_EXTENSION);
		return $fileExt;
	}

	public function SetUploadPath($path) {
		$this->uploadPath = $path;
	}

	public function UploadFiles($prefix) {
		for ($i = 0; $i < $this->totalFileCount; $i++) {

			$uniqueId = $this->GenerateUniqueFileName($prefix);
			$this->uniqueFileName[] = $uniqueId . $this->filesExt[$i];
			$pathToUpload = $this->uploadPath . $uniqueId . $this->filesExt[$i];
			$fileUploaded = move_uploaded_file($this->files['tmp_name'][$i], $pathToUpload);
			if (!$fileUploaded) {
				$this->fileUploadStatus[] = false;
			} else {
				$this->fileUploadStatus[] = true;
			}
		}

	}

	public function getFileUploadStatus() {
		return $this->fileUploadStatus;
	}

	public function getFileNames() {
		return $this->uniqueFileName;
	}

	public function DeleteFile($fileName) {
		unlink($this->uploadPath . $fileName);
	}

	private function checkIdExists($rid) {
		// global $con;
		// $q_v_id = "SELECT user_id FROM ot_registeration WHERE user_id = '$rid'";
		// $get_v_id_result = $con->query($q_v_id) or die($con->error);

		// if ($get_v_id_result->fetch_assoc() > 0) {
		// 	return true;
		// } else {
		// 	return false;
		// }
		return false;
	}

	public function GenerateUniqueFileName($prefix) {
		$customstr = $prefix;
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		$length = 7;

		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
			$generatestr = $customstr . $randomString;
		}

		$rid = $generatestr;

		if ($this->checkIdExists($rid)) {
			return $this->GenerateUniqueFileName($prefix);
		} else {
			return $generatestr;
		}

	}

}

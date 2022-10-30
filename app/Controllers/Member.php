<?php
// ADEL CODEIGNITER 4 CRUD GENERATOR

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\MemberModel;

class Member extends BaseController
{

	protected $memberModel;
	protected $validation;

	public function __construct()
	{
		$this->memberModel = new MemberModel();
		$this->validation =  \Config\Services::validation();
	}

	public function index()
	{

		$data = [
			'title'     		=> 'Member',
      'users'         => $this->memberModel->findAll()
		];

		return view('member/index', $data);
	}

	public function getOne()
	{
		$response = array();

		$id = $this->request->getPost('id');

		if ($this->validation->check($id, 'required|numeric')) {

			$data = $this->memberModel->where('id', $id)->first();

			return $this->response->setJSON($data);
		} else {
			throw new \CodeIgniter\Exceptions\PageNotFoundException();
		}
	}

	public function add()
	{
		$response = array();

		$fields['id'] = $this->request->getPost('id');
		$fields['nama_lengkap'] = $this->request->getPost('nama_lengkap');
		$fields['tempat_lahir'] = $this->request->getPost('tempat_lahir');
		$fields['tanggal_lahir'] = $this->request->getPost('tanggal_lahir');
		$fields['alamat'] = $this->request->getPost('alamat');
		$fields['skill'] = $this->request->getPost('skill');
		$fields['no_telp'] = $this->request->getPost('no_telp');
		$fields['angkatan'] = $this->request->getPost('angkatan');
		$fields['organisasi'] = $this->request->getPost('organisasi');
		$fields['lencana'] = $this->request->getPost('lencana');
		$fields['foto'] = $this->request->getPost('foto');
		$fields['status'] = $this->request->getPost('status');


		$this->validation->setRules([
			'nama_lengkap' => ['label' => 'Nama lengkap', 'rules' => 'required|min_length[0]|max_length[50]'],
			'tempat_lahir' => ['label' => 'Tempat lahir', 'rules' => 'required|min_length[0]|max_length[50]'],
			'tanggal_lahir' => ['label' => 'Tanggal lahir', 'rules' => 'required|valid_date|min_length[0]'],
			'alamat' => ['label' => 'Alamat', 'rules' => 'required|min_length[0]|max_length[255]'],
			'skill' => ['label' => 'Skill', 'rules' => 'required|min_length[0]|max_length[255]'],
			'no_telp' => ['label' => 'No telp', 'rules' => 'required|min_length[0]|max_length[20]'],
			'angkatan' => ['label' => 'Angkatan', 'rules' => 'required|min_length[0]|max_length[20]'],
			'organisasi' => ['label' => 'Organisasi', 'rules' => 'required|min_length[0]'],
			'lencana' => ['label' => 'Lencana', 'rules' => 'required|min_length[0]'],
			'foto' => ['label' => 'Foto', 'rules' => 'required|min_length[0]|max_length[255]'],
			'status' => ['label' => 'Status', 'rules' => 'required|numeric|min_length[0]|max_length[11]'],

		]);

		if ($this->validation->run($fields) == FALSE) {

			$response['success'] = false;
			$response['messages'] = $this->validation->getErrors(); //Show Error in Input Form

		} else {

			if ($this->memberModel->insert($fields)) {

				$response['success'] = true;
				$response['messages'] = lang("App.insert-success");
			} else {

				$response['success'] = false;
				$response['messages'] = lang("App.insert-error");
			}
		}

		return $this->response->setJSON($response);
	}

	public function edit()
	{
		$response = array();

		$fields['id'] = $this->request->getPost('id');
		$fields['nama_lengkap'] = $this->request->getPost('nama_lengkap');
		$fields['tempat_lahir'] = $this->request->getPost('tempat_lahir');
		$fields['tanggal_lahir'] = $this->request->getPost('tanggal_lahir');
		$fields['alamat'] = $this->request->getPost('alamat');
		$fields['skill'] = $this->request->getPost('skill');
		$fields['no_telp'] = $this->request->getPost('no_telp');
		$fields['angkatan'] = $this->request->getPost('angkatan');
		$fields['organisasi'] = $this->request->getPost('organisasi');
		$fields['lencana'] = $this->request->getPost('lencana');
		$fields['foto'] = $this->request->getPost('foto');
		$fields['status'] = $this->request->getPost('status');


		$this->validation->setRules([
			'nama_lengkap' => ['label' => 'Nama lengkap', 'rules' => 'required|min_length[0]|max_length[50]'],
			'tempat_lahir' => ['label' => 'Tempat lahir', 'rules' => 'required|min_length[0]|max_length[50]'],
			'tanggal_lahir' => ['label' => 'Tanggal lahir', 'rules' => 'required|valid_date|min_length[0]'],
			'alamat' => ['label' => 'Alamat', 'rules' => 'required|min_length[0]|max_length[255]'],
			'skill' => ['label' => 'Skill', 'rules' => 'required|min_length[0]|max_length[255]'],
			'no_telp' => ['label' => 'No telp', 'rules' => 'required|min_length[0]|max_length[20]'],
			'angkatan' => ['label' => 'Angkatan', 'rules' => 'required|min_length[0]|max_length[20]'],
			'organisasi' => ['label' => 'Organisasi', 'rules' => 'required|min_length[0]'],
			'lencana' => ['label' => 'Lencana', 'rules' => 'required|min_length[0]'],
			'foto' => ['label' => 'Foto', 'rules' => 'required|min_length[0]|max_length[255]'],
			'status' => ['label' => 'Status', 'rules' => 'required|numeric|min_length[0]|max_length[11]'],

		]);

		if ($this->validation->run($fields) == FALSE) {

			$response['success'] = false;
			$response['messages'] = $this->validation->getErrors(); //Show Error in Input Form

		} else {

			if ($this->memberModel->update($fields['id'], $fields)) {

				$response['success'] = true;
				$response['messages'] = lang("App.update-success");
			} else {

				$response['success'] = false;
				$response['messages'] = lang("App.update-error");
			}
		}

		return $this->response->setJSON($response);
	}

	public function remove()
	{
		$response = array();

		$id = $this->request->getPost('id');

		if (!$this->validation->check($id, 'required|numeric')) {

			throw new \CodeIgniter\Exceptions\PageNotFoundException();
		} else {

			if ($this->memberModel->where('id', $id)->delete()) {

				$response['success'] = true;
				$response['messages'] = lang("App.delete-success");
			} else {

				$response['success'] = false;
				$response['messages'] = lang("App.delete-error");
			}
		}

		return $this->response->setJSON($response);
	}
}

<?php namespace App\Controllers;

use App\Models\Upload_model;
use App\Models\Galery_model;

class Upload extends BaseController
{
    public function __construct()
    {
        $this->upload = new Upload_model();
        $this->galery = new Galery_model();
    }

	public function index()
	{
        helper('form');
		echo view('multiple_upload');
    }

    public function process()
    {
        $peng_upload = $this->request->getPost('title');
        $files = $this->request->getFiles();

        if($files){
            
            $random = rand(000, 999);
            
            $data_uploads = [
                'id' => $random,
                'peng_upload' => $peng_upload
            ];

            $this->upload->insertUpload($data_uploads);

            foreach($files['file_upload'] as $img){

                $data_galery = [
                    'upload_id' => $random,
                    'nama_file' => $img->getRandomName()
                ];

                $this->galery->insertGalery($data_galery);

                $randomName = $img->getRandomName();
                $img->move(ROOTPATH . 'public/uploads', $randomName);
            
            }
            session()->setFlashdata('success', 'Berhasil upload '.count($files['file_upload']).' files');
            return redirect()->to('/upload');
        
        }
    }
}

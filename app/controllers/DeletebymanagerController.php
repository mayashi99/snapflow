<?php

require_once '../app/models/DeletebyManagerController.php';

class DeletebyManagerController extends Controller
{
    var $deletebyManagerModel;

    public function __construct()
    {
        $this->deletebyManagerModel = new DeletebyManager();
    }




    public function deletePhotographer()
    {

        if (isset($_POST['submitDelete'])) {
            $data = [
                'id' => $_POST['id'],
            ];

            if ($this->organizationModel->deletePhotographer($data)) {
                header('location:' . URLROOT . '/PageController/photographerprofile');
            } else {
                die('Something went wrong');
            }
        }
    }

    public function deleteEditor()
    {

        if (isset($_POST['submitDelete'])) {
            $data = [
                'id' => $_POST['id'],
            ];

            if ($this->organizationModel->deleteEditor($data)) {
                header('location:' . URLROOT . '/PageController/editorprofile');
            } else {
                die('Something went wrong');
            }
        }
    }
    public function deletecustomer()
    {

        if (isset($_POST['submitDelete'])) {
            $data = [
                'id' => $_POST['id'],
            ];

            if ($this->organizationModel->deletecustomer($data)) {
                header('location:' . URLROOT . '/PageController/editorprofile');
            } else {
                die('Something went wrong');
            }
        }
    }

}

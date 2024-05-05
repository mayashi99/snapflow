<?php

require_once '../app/models/AssignEditor.php';

class AssignEditorController extends Controller
{
    var $assignEditorModel;

    public function __construct()
    {
        $this->assignEditor = new AssignEditor();
    }



    public function acceptEditor()
    {

        if (isset($_POST['submitAccept'])) {
            $data = [
                'id' => $_POST['id'],
            ];

            if ($this->organizationModel->acceptEditor($data)) {
                header('location:' . URLROOT . '/PageController/editorprofile');
            } else {
                die('Something went wrong');
            }
        }
    }



}
